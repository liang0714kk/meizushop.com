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
Route::get('/home/index/index', "Home\IndexController@index");
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

//商品详情
Route::resource('/admin/goods', 'Admin\GoodsController');









































































































































































































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





















//后台购物车
Route::get('admin/carts/index', 'Admin\CartsController@index');
Route::get('admin/carts/delete/{id}', 'Admin\CartsController@delete');






















     





//前台商品详情页
Route::get('home/gdetail/{pid}/{name}', 'Home\gdetailController@index');

// 提交订单
Route::post('home/order', 'Home\OrderController@index');
// 添加订单
Route::post('home/order/addorder', 'Home\OrderController@add');
//添加地址
Route::post('home/order/ajax', 'Home\OrderController@ajax');
//支付订单
Route::get('home/order/pay', 'Home\OrderController@pay');

//购物车
Route::post('home/cart/ajax', 'Home\CartController@ajax');
Route::get('home/cart/index', 'Home\CartController@index');
Route::get('home/cart/delete/{gid}', 'Home\CartController@delete');
Route::post('home/cart/pay', 'Home\CartController@pay');

// 订单中心
Route::get('home/ordercenter/index', 'Home\OrdercenterController@index');
Route::get('home/ordercenter/delete/{id}', 'Home\OrdercenterController@delete');
Route::get('home/ordercenter/update/{id}', 'Home\OrdercenterController@update');
Route::get('home/ordercenter/paynow/{id}', 'Home\OrdercenterController@paynow');
Route::get('home/ordercenter/nopay/', 'Home\OrdercenterController@nopay');
Route::get('home/ordercenter/nodeliver/', 'Home\OrdercenterController@nodeliver');
Route::get('home/ordercenter/nostate/', 'Home\OrdercenterController@nostate');
Route::get('home/ordercenter/achive/', 'Home\OrdercenterController@achive');
Route::get('home/ordercenter/address', 'Home\OrdercenterController@address');
Route::post('home/ordercenter/address/add', 'Home\OrdercenterController@add');
Route::get('home/ordercenter/address/delete/{id}', 'Home\OrdercenterController@deleteAdder');














