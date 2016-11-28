<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Crypt;
use Session;

class LoginController extends Controller
{
    //登录界面
    public function login()
    {
        return view('admin.login.login');
    }

    //登录执行
    public function signin(Request $request)
    {
        $res = DB::table('user') -> where('name', $request -> name) -> first();
        if($res)
        {
            // $password = Crypt::decrypt($res -> password);
            $password = $res -> password;
            $rpassword = $request -> password;
            if($rpassword == $password)
            {

                //配置信息
                $config = DB::table('configs') -> first();
                session(['master' => $res, 'config' => $config]);
                $data = DB::table('user') -> where('name', $request -> name) -> first() -> updated_at;
                $time = time();
                $data = $time;
                //修改登录时间
                $res = DB::table('user') -> where('name', $request -> name) -> update(['updated_at' => $data]);
                return redirect('admin/index/index') -> with(['info' => '登录成功']);
            }
            else
            {
                return back() -> with(['info' => '账户名与密码不匹配']);
            }
        }
        else
        {
            return back() -> with(['info' => '账户名与密码不匹配']);
        }
    }
    //退出登录
    public function logout()
    {
        Session::forget('master');
        var_dump(session('master'));
        return redirect('admin/login/login') -> with(['info' => '退出成功，请登录']);
    }
}
