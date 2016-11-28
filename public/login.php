
<?php


namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use DB;
use Crypt;


class LoginController extends Controller
{
    //
    public function login()
    {
        return view('admin.login.login') -> with(['title' => '找回密码']);
    }


    // dologin
    public function doLogin(Request $request)
    {
        $data = $request -> except('_token');


        //检测验证码是否正确
        $code = Session::get('milkcaptcha');


        if($code != $data['captcha'])
        {
            return back() -> with(['info' => '验证码错误']);
        }


        $res = DB::table('users') -> where('email', $request -> email) -> first();
        if(!$res)
        {
            return back() -> with(['info' => '你输入的邮箱不存在']);
        }


        $password = $res -> password;
        //解密
        $password = Crypt::decrypt($password);


        //判断
        if($data['password'] != $password)
        {
            return back() -> with(['info' => '输入的邮箱或密码错误']);
        }


        session(['master' => $res]);
        return redirect('/admin/index') -> with(['info' => '登录成功']);


    }


    // logout
    public function logout()
    {
        Session::forget('master');
        var_dump(session('master'));
        return redirect ('/admin/login') -> with(['info' => '退出成功，请登录']);
    }


}
