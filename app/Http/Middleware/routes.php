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

// 后台登录页面

Route::get('admin/login/login','LoginController@login');
Route::post('admin/login/doLogin','LoginController@doLogin');
Route::get('admin/login/logout','LoginController@logout');


Route::group(['middleware'=>'login'],function(){

//后台主页
Route::get('admin','AdminController@index');

//后台用户的控制器
Route::controller('admin/user','UserController');
//后台类别的控制器
Route::controller('admin/cate','CateController');
//后台商品管理
Route::controller('/admin/goods','GoodsController');
//后台的网站配置
Route::controller('admin/config','ConfigController');
// 友情链接
Route::controller('admin/you','YouController');
//后台购物车
Route::controller('admin/trade','TradeController');
//后台订单
Route::controller('admin/order','OrderController');

});

Route::group(['middleware'=>'config'],function(){
//前台主页
Route::get('index','IndexController@index');
// Route::get('index11','IndexController@index');
//前台列表页
Route::controller('/index/list','ListController');
//前台详情页
Route::controller('/index/detail','DetailController');
// 验证码的路由
Route::get('vcode','LoginController@vcode');
Route::get('getvcode','LoginController@getVcode');
Route::get('yzm','LoginController@yzm');
//前台登录页
Route::controller('index/gologin','GologinController');
Route::controller('index/register','RegisterController');
// 前台注册页
Route::get('/index/register','RegisterController@Register');
Route::post('/index/doRegister','RegisterController@doRegister');

// 忘记密码
Route::get('/index/forget','RegisterController@forget');
Route::post('/index/doForget','RegisterController@doForget');
//找回密码
Route::get('/index/find','RegisterController@find');
Route::post('/index/updatePassword','RegisterController@update');
Route::post('/index/youxiang','RegisterController@youxiang');

// 前台登录
Route::get('/index/gologin','IndexLoginController@gologin');
Route::post('/index/doGologin','IndexLoginController@doGologin');
//前台退出
Route::get('/index/indexLogout','IndexLoginController@indexLogout');
//收藏商品
Route::controller('index/shou','PhotosController');
//问题
Route::controller('/index/wenti','WentiController');
// 前台友联
Route::controller('index/youlian','YoulianController');

//前台个人中心
Route::controller('index/ucenter','UcenterContrller');

//前台购物车
Route::controller('index/trade','ItradeController');

//前台订单
Route::controller('index/order','IorderController');

//前台收货地址
Route::post('index/dress','DressController@add');

Route::get('index/dress','DressController@sheng');
//
Route::get('index/dress/{sel}','DressController@city');

Route::get('index/dress/{sels}','DressController@xian');

});
