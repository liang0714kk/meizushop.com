<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Crypt;
use Mail;

class PersonalController extends Controller
{
    public function index()
    {
        $uid = session('master') -> id;
        $noPaycount = DB::table('orders') -> where('uid', $uid) -> where('pay', 0) -> count();
        $noDelivercount = DB::table('orders') -> where('uid', $uid) -> where('deliver', 0) -> count();
        return view('home.user.personal.index') -> with(['noPaycount' => $noPaycount, 'noDelivercount' => $noDelivercount]);
    }

    //修改信息
    public function edit()
    {

        if(session('master'))
        {
            return view('home.user.personal.edit');
        }else
        {
            return redirect('home/user/login');
        }

    }
    //修改头像
    public function ePhoto()
    {
        return view('home.user.personal.ePhoto');
    }
    //选择图片
    public function editPhoto(Request $request)
    {
        $data = $request -> except('_token');
        $oldPhoto = DB::table('user') -> where('id', $request -> id) -> first() -> photo;
        if($request -> hasFile('photo'))
        {
            if($request -> file('photo') -> isValid())
            {
                $type = $request -> file('photo') -> getClientOriginalExtension();-
                $fileName = time().mt_rand(10000,9999999).'.'.$type;

                //移动文件
                $move = $request -> file('photo') -> move('./uploads/avater', $fileName);
                if($move)
                {
                    $data['photo'] = $fileName;
                    //删除旧图片
                    if($oldPhoto != 'default.jpg')
                    {
                        unlink('./uploads/avater/'.$oldPhoto);
                    }
                }
            }else
            {
                $request -> file('photo') -> move('./uploads/avater', 'default.jpg');
            }
        }
        //执行

        $res = DB::table('user') -> where('id', $request -> id) -> update($data);
        if($res)
        {

            $res = DB::table('user') -> where('id', $request -> id) -> first();
            session(['master' => $res]);
            return redirect('home/user/personal/index') -> with(['info' => '修改成功']);
        }else
        {
            return back() -> with(['info' => '修改失败']);
        }


    }
    //修改昵称
    public function ajaxNickname(Request $request)
    {
        $data = $request -> except('_token');
        $nickName = $data['name'];
        if(!empty($nickName))
        {
            $res = DB::table('user') -> where('id', $data['id']) -> update(['nickname' => $nickName]);
            if($res)
            {
            $ndata = DB::table('user') -> where('id', $data['id']) -> first();
            session(['master' => $ndata]);
                return 1;
            }else
            {
                return 2;
            }
        }
        else
        {
            return 3;
        }
    }
    //修改密码
    public function changePassword(Request $request)
    {
        $data = $request -> except('_token');
        $pdata = DB::table('user') -> where('id', $data['id']) -> first();
        //解密原密码
        $password = Crypt::decrypt($pdata -> password);
        // 判断原密码
        if($data['OldPassword'] == $password)
        {
            if($data['NewPassword'] == $data['reNewPassword'])
            {
                if(!empty($data['NewPassword']) && !empty($data['NewPassword']))
                {
                    $data['NewPassword'] = Crypt::encrypt($data['NewPassword']);
                    $res = DB::table('user') -> where('id', $data['id']) -> update(['password' => $data['NewPassword']]);
                    $nres = DB::table('user') -> where('id', $data['id']) -> first();
                    session(['master' => $nres]);
                    return redirect('home/user/login') -> with(['info' => '修改成功,请登录']);
                }else
                {
                    return back() -> with(['info' => '新密码或确认密码不能为空']);
                }
            }else
            {
                return back() -> with(['info' => '新密码与确认密码不一致']);
            }

        }else
        {
            return back() -> with(['info' => '原密码不正确']);
        }
        $this -> validate($request,[
            'NewPassword' => 'required|min:6|max:18',
            'reNewPassword' => 'required|same:NewPassword'
            ],[
            'OldPassword.required' => '原密码不能为空' ,
            'NewPassword.required' => '密码不能为空',
            'NewPassword.min' => '密码不能少于6位',
            'NewPassword.max' => '密码不能多于18位',
            'reNewPassword.required' => '确认密码不能为空',
            'reNewPassword.same' => '确认密码不一致',
            ]);
    }

    //修改邮箱
    public function verPass(Request $request)
    {
        $data = $request -> except('_token');
        $pdata = DB::table('user') -> where('id', $data['id']) -> first();
        $password = Crypt::decrypt($pdata -> password);
        if($data['verPass'] == $password)
        {
            return 1;
        }
        else
        {
            return 2;
        }
    }
    public $code;
    //验证码
    public function ajaxNewEmail(Request $request)
    {
        $code = rand(100000,999999);
        session('master') -> code = $code;
        $data = $request -> except('_token');
        $res  = DB::table('user') -> where('id', $data['id']) -> first();
        $send = Mail::send('emails.info', ['res' => $res, 'code' => $code], function($m) use ($data)
        {
            $m -> subject('Flyme安全服务');
            $m -> to($data['newEmail']);
        });
        if($send)
        {
            return 1;
        }else
        {
            return 2;
        }
    }
    //修改邮箱(update)
    public function verEmail(Request $request)
    {
        $data = $request -> except('_token');
        $code = session('master') -> code;
        if($data['kapkey'] == $code)
        {
            $vres = DB::table('user') -> where('id', $data['id']) -> update(['email' => $data['newEmail']]);
            $eres = DB::table('user') -> where('id', $data['id']) -> first();
            session(['master' => $eres]);
            return redirect('home/user/psersonal/index') -> with(['info' => '修改成功']);
        }
        else
        {
            return back() -> with(['info' => '验证码不正确']);
        }
    }

    //绑定手机
    public function verPhonePass(Request $request)
    {
        $data = $request -> except('_token');
        $res = DB::table('user') -> where('id', $data['id']) -> first();
        //密码解密
        $password = Crypt::decrypt($res -> password);
        if($data['verPhonePass'])
        {
            if($data['verPhonePass'] == $password)
            {
                return 1;
            }
            else
            {
                return 2;
            }
        }
        else
        {
            return 3;
        }
    }
    //手机号
    public function verNewPhone(Request $request)
    {
        $data = $request -> except('_token');
        $newPhone = $data['newPhone'];
        $phoneCode = rand(10000,999999);
        if($res)
        {
            session(['verPhone' => $phoneCode]);
            return session('verPhone');
        }
        else
        {
            return 2;
        }
    }

    //添加
    public function phoneAdd(Request $request)
    {
        $data = $request -> except('_token','id','kapkay');
        $res = DB::table('user') -> where('id', $request -> id) -> update($data);
        if($res)
        {
            $sres = DB::table('user') -> where('id', $request -> id) -> first();
            // dd($data);
            session(['master' => $sres]);
            return redirect('home/user/personal/edit') -> with(['info' => '绑定成功']);
        }
        else
        {
            return back() -> with(['info' => '绑定失败']);
        }
    }
    // 短信验证
    private function send($code,$phone){

        //初始化必填
        $options['accountsid']='5d8236d73f0bff689a514e0603221c45';
        $options['token']='d2c21cd49b1827bab8bcbbdedc57da7d';


        //初始化 $options必填
        $ucpass = new \Ucpaas($options);

        //短信验证码（模板短信）,默认以65个汉字（同65个英文）为一条（可容纳字数受您应用名称占用字符影响），超过长度短信平台将会自动分割为多条发送。分割后的多条短信将按照具体占用条数计费。
        $appId = "49899c46bac147ca97accb4d7c090a86";
        $to = $phone;
        $templateId = "31524";
        $param="华为官网,".$code.",3";
        $res = $ucpass->templateSMS($appId,$to,$templateId,$param);
        $yz = json_decode($res)->resp->respCode;
        if($yz=="000000"){
            return true;
        }else{
            return flase;
        }
    }
         // 接收ajax传送手机号码
    //     */
    //     public function getAjax(Request $request)
    //     {
    //         $phone = $request->all()['phone'];
    //         // $phone = "13629342732";
    //         $code=rand(1000,9999);
    //         $res = $this->send($code,$phone);
    //         if($res){
    //             session(['yz'=>$code]);
    //             echo "1";
    //         }else{
    //             echo "2";
    //         }
    //     }

}
