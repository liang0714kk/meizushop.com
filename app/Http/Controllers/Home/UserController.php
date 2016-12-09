<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;
use Session;
use DB;
use Crypt;
use Mail;


class UserController extends Controller
{
    //前台注册
    public function register()
    {

        return view('home.user.register');
    }
    //邮箱验证码
    public function ajaxResEmail(Request $request)
    {
        $rescode = rand(10000,999999);
        $data = $request -> except('_token');
        $send = Mail::send('emails.resInfo', [ 'rescode' => $rescode], function($m) use ($data)
        {
            $m -> subject('Flyme用户服务');
            $m -> to($data['resEmail']);
        });
        session(['rescode' => $rescode]);
        if($send)
        {
            return 1;
        }else
        {
            return 2;
        }
    }
    //前台执行注册
    public function doregister(Request $request)
    {
            // dd($request -> except('_token'));
            //处理字段
            $this -> validate($request,[
                'name' => 'required|min:6|max:18',
                'password' => 'required|min:6|max:18',
                'repassword' => 'required|same:password'
                ],[
                'name.required' => '用户名不能为空',
                'name.min' => '用户名不能少于6位',
                'name.max' => '用户名不能多于18位',
                'password.required' => '密码不能为空',
                'password.min' => '密码不能少于6位',
                'password.max' => '密码不能多于18位',
                'repassword.required' => '确认密码不能为空',
                'repassword.same' => '确认密码不一致',
                'email.required' => '邮箱不能为空',
                'email.email' => '邮箱格式不正确',
                ]);
        $data = $request -> except('_token','repassword','vkey');
        $rescode = session('rescode');
        if($request-> vkey == $rescode)
        {
           $udata = DB::table('user') -> where('name',$data['name']) -> first();
           if(!$udata)
           {
                //加密密码
               $data['password'] = Crypt::encrypt($data['password']);
               //哈希加密
               // $data['password'] = HASH::make($data['password']);
               //处理昵称
               $data['nickname'] = str_random(8);
               //处理状态
               $data['status'] = 1;
               //处理性别
               $data['sex'] = 1;
               //处理token字
               $data['remember_token'] = str_random(50);
               //处理时间
               $time = time();
               $data['created_at'] = $time;
               // dd($data['created_at']);
               $data['updated_at'] = $time;

                $res = DB::table('user') -> insert($data);

                if($res)
                {
                    return redirect('/home/user/login') -> with(['info' => '注册成功,请登录']);
                }else
                {
                    return back() -> with(['info' => '注册失败']);
                }
           }else
            {
                return back() -> with(['info' => 'Flyme账号已存在']);
            }
        }
    }


    //前台登录
    public function login()
    {
        return view('home.user.login');
    }
    //验证码
    public function captcha($tmp)
    {
        ob_get_clean();
        //生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder;
        //设置图片宽高及字体
        $builder->build($width = 100, $height = 40, $font = null);
        //获取验证码的内容
        $phrase = $builder->getPhrase();
        //把内容存入session
        Session::flash('milkcaptcha', $phrase);
        //生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Type: image/jpeg');
        $builder->output();
    }
    //执行登录
    public function dologin(Request $request)
    {

        $data = $request -> except('_token');
        //检测验证码
        $code = Session::get('milkcaptcha');
        if($data['captcha'] != $code)
        {
            return back() -> with(['info' => '您输入的验证码错误']);
        }

        $res = DB::table('user') -> where('name', $request -> name) -> first();
        if($res -> status == 1)
        {
            if($res)
            {
                $password = Crypt::decrypt($res -> password);
                $rpassword = $request -> password;
                if($rpassword == $password)
                {
                    session(['master' => $res]);
                    $config = DB::table('configs') -> first();
                    session(['config' => $config]);
                    $data = DB::table('user') -> where('name', $request -> name) -> first() -> updated_at;
                    $time = time();
                    $data = $time;
                    //修改登录时间
                    $res = DB::table('user') -> where('name', $request -> name) -> update(['updated_at' => $data]);
                    return redirect('home/index/index') -> with(['info' => '登录成功']);
                }
                else
                {
                    return back() -> with(['info' => '您输入的账户名与密码不匹配']);
                }
            }else
            {
            return back() -> with(['info' => '您输入的账户名与密码不匹配']);
            }
        }else
        {
            return back() -> with(['info' => '您的账号已被冻结，请联系客服']);
        }

    }
    //前台退出
    public function logout()
    {
        Session::forget('master');
        return redirect('home/index/index') -> with(['info' => '退出成功']);
    }

    //忘记密码
    //验证账号页面
    public function forget1()
    {
        return view('home.user.forget1');
    }
    //验证账号
    public function doName(Request $request)
    {
        $data = $request -> except('_token');
        $res = DB::table('user') -> where('name', $data['name']) -> first();
        //检测验证码
        $code = Session::get('milkcaptcha');
        if($data['captcha'] != $code)
        {
            return back() -> with(['info' => '验证码错误']);
        }
        //判断
        if($res)
        {
            $name = $request -> name;
            // dd($name);
            return redirect('/home/user/forget2/'."$name");
        }else
        {
            return back() -> with(['info' => '您输入的账号不存在']);
        }
    }
    //验证邮箱页面
     public function forget2($name)
    {
        return view('home.user.forget2') -> with(['name' => $name]);
    }

    //发送邮件
    public function sendEmail(Request $request)
    {
        $data = $request -> except('_token');
        $res = DB::table('user') -> where('name', $data['name']) -> first();

        if(!$res)
        {
            return back() -> with(['info' => '您输入的邮箱不存在']);
        }

        $send = Mail::send('emails.model', ['res' => $res], function($m) use ($data)
        {
            $m -> subject('Flyme安全服务');
            $m -> to($data['email']);
        });
        if($send)
        {
            return view('home.user.login');
        }else
        {
            return back() -> with(['info' => '数据异常']);
        }

    }
    //重置密码
    public function reset($id, $remember_token)
    {
        //验证token
        $data = DB::table('user') -> where('id',$id) -> first();
        //判断remember_token
        if($data -> remember_token != $remember_token)
        {
            return redirect('/home/user/info') -> with(['info' => '地址来源不合法!']);
        }
        else
        {
            return view('home.user.newpass',['id' => $id]);
        }
    }
    //不合法来源页面
    public function info()
    {
        return view('home.user.info');
    }
    //重置密码
    public function repass(Request $request)
    {
        $this -> validate($request,[
            'password' => 'required|min:6|max:18',
            'repassword' => 'required|same:password'
            ],[
            'password.required' => '密码不能为空',
            'password.min' => '密码不能少于6位',
            'password.max' => '密码不能多于18位',
            'repassword.required' => '确认密码不能为空',
            'repassword.same' => '确认密码不一致',
            ]);
            $data = $request -> except('_token','id','repassword');
            if($data['password'] == $request -> repassword)
            {
                $data['password'] = Crypt::encrypt($data['password']);
                DB::table('user') -> where('id',$request -> id) -> update($data);
                return redirect('home/user/login') -> with(['info' => '密码修改成功,请重新登录']);
            }else
            {
                return back() -> with(['info' => '两次输入密码不一致']);
            }

    }
    //前台个人中心
    public function personal()
    {
        return view('home.user.personal');
    }


    //服务条款
    public function service()
    {
        return view('home.user.service');
    }


}
