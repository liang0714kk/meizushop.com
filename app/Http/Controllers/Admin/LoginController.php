<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Crypt;

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
        $data = DB::table('user') -> where('name', $request -> name) -> first();
        if($data)
        {
            $password = Crypt::decrypt($data -> password);
            $rpassword = $request -> password;
            if($rpassword == $password)
            {
                $data = DB::table('user') -> where('name', $request -> name) -> first() -> updated_at;
                $time = time();
                $data = $time;
                //修改登录时间
                $res = DB::table('user') -> where('name', $request -> name) -> update(['updated_at' => $data]);
                return redirect('admin/index/index');
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
    public function logout(Request $request)
    {
        $res = $request->session()->flush();
        return redirect('admin/login/login');
    }
}
