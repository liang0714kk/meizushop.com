<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/form2', function(){
    return view('form2');
});
Route::post('admin/back', "Admin\UserController@back");

//后台主页
Route::get('/admin/index/index', "Admin\IndexController@index");

//用户管理
Route::get('/admin/user/add', "Admin\UserController@add");
Route::post('/admin/user/insert',"Admin\UserController@insert");
Route::get('/admin/user/index', "Admin\UserController@index");

//双击修改状态
Route::post('/admin/user/ajaxStatus', "Admin\UserController@ajaxStatus");
//用户编辑
Route::get('/admin/user/edit/{id}', "Admin\UserController@edit");
Route::post('/admin/user/update', "Admin\UserController@update");
//删除用户
Route::get('/admin/user/delete/{id}', "Admin\UserController@delete");
//用户详情
Route::get('/admin/user/details', "Admin\UserController@details");
Route::get('/admin/user/oneDetail/{id}', "Admin\UserController@oneDetail");
//后台登录
Route::get('admin/login/login', "Admin\LoginController@login");
Route::post('admin/login/signin', "Admin\LoginController@signin");
