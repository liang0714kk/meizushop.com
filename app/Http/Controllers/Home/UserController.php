<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //前台注册
    public function register()
    {
        return view('home.user.register');
    }
    //服务条款
    public function service()
    {
        return view('home.user.service');
    }

    //前台登录
    public function login()
    {
        return view('home.user.login');
    }
    //前台普通登录
    public function pLogin(Request $request)
    {
        // return ($request -> )
        return view('home.user.pLogin');
    }
    //执行登录
    public function dlogin(Request $request)
    {
        return view('home/index/index');
    }
    //前台个人中心
    public function personal()
    {
        return view('home.user.personal');
    }

}
