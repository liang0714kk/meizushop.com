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

//前台主页
Route::get('/home/index/index', "home\IndexController@index");
//前台注册
Route::get('/home/user/register', "Home\UserController@register");
//前台登录
Route::get('/home/user/login', "Home\UserController@login");
//前台普通登录
Route::get('/home/user/pLogin', "Home\UserController@pLogin");
//服务条款
Route::get('/home/user/service', "Home\UserController@service");
//前台个人中心
Route::get('home/user/personal', "Home\UserController@personal");
//登录放回前台主页
Route::post('home/user/dologin', "Home\UserController@dologin");


































































//商品分类管理
Route::resource('/admin/category', 'Admin\CategoryController');
//商品属性添加
Route::get('/admin/goods/attr/{id}', 'Admin\GoodsController@attr');
//双击修改status事件
Route::post('/admin/goods/ajaxStatus', 'Admin\GoodsController@ajaxStatus');
//双击修改hot事件
Route::post('/admin/goods/ajaxHot', 'Admin\GoodsController@ajaxHot');
//商品详情
Route::resource('/admin/goods', 'Admin\GoodsController');
//详情图片管理
Route::controller('admin/photos', 'Admin\PhotosController');
//文章管理之FAQ
Route::controller('admin/FAQ', 'Admin\FAQController');
//文章管理之反馈建议feedback前台页
Route::get('home/feedback/add', 'Home\FeedbackController@add');
//文章管理之后台展示页
Route::get('home/feedback/index', 'Home\FeedbackController@index');
Route::get('home/feedback/delete/{id}', 'Home\FeedbackController@delete');
//单击feedback提交数据
Route::post('/home/feedback/ajaxFeedback', 'Home\FeedbackController@AjaxFeedback');
//前台商品分类展示页
Route::get('/home/category/index', 'Home\CategoryController@index');











































































































































































































//网站配置
Route::get('admin/config', 'Admin\ConfigController@index');
Route::post('admin/config/update', 'Admin\ConfigController@update');

// 后台主页
Route::get('admin/index/index', 'Admin\IndexController@index');


// 后台订单处理
// 订单资源控制器
Route::resource('admin/order/order', 'Admin\OrderController');

//ajax实现状态改变
Route::post('admin/order/order/ajax/deliver', 'Admin\OrderajaxController@deliver');
Route::post('admin/order/order/ajax/pay', 'Admin\OrderajaxController@pay');


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
//后台退出登录
Route::get('admin/login/logout', "Admin\LoginController@logout");





















//购物车
Route::get('admin/carts/index', 'Admin\CartsController@index');
Route::get('admin/carts/delete/{id}', 'Admin\CartsController@delete');

