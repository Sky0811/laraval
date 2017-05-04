<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// ,'middleware'=>'login'
// Route::get('/',function()
// 	{
// 		return view('/Home.index.index');
// 	});

// Route::get('/', function () {
//     return view('Home/index/index');
// });
//后台注册
Route::resource('/auser','Admin\AuserAddController');
Route::resource('/demo','User\UserController');

//后台登录
Route::get('admin/login','Admin\LoginController@index');
Route::post('admin/dologin','Admin\LoginController@dologin');

//后台验证码
Route::get('Admin/captch/{tmp}','Admin\LoginController@captch');
// Route::get('/a','admin\AdminController@index');
//小米后台管理
Route::group(['prefix'=>'admin1','middleware'=>'login'],function()
{

//孙帅
//管理员用户管理
Route::resource('/auser','admin\UserController');
//商品详情列表管理
Route::resource('/goods','admin\GoodsController');
//订单管理路由
Route::resource('/orderlist','admin\OrderlistController');
//退货订单路由
Route::resource('/order','admin\OrderController');
//孙帅
//姚小州
//登录主页
Route::resource('/index','Admin\IndexController');
//退出系统
Route::get('/out','Admin\LoginController@over');

//前台用户添加
Route::resource('/user','Admin\UserAddController');

//用户评价
Route::resource('/eval','Admin\EvalController');
//姚小州

// //后台用户管理
// Route::resource('/demo','admin\AdminController');
//网站配置
Route::resource('/net','admin\NetController');
//友情链接
Route::resource('/link','admin\LinkController');
//商品分类
Route::resource('/goodcate','admin\GoodcateController');
//商品子类
Route::get('/goodcate/addson/{id}','admin\GoodcateController@addson');
Route::post('/goodcate/addson','admin\GoodcateController@doAddSon');
//地址管理
Route::resource('/address','admin\AddressController');
//轮播图片管理
Route::resource('/carousel','admin\CarouselController');
//单品照片管理
Route::resource('/product','admin\ProductController');
});
Route::group(['prefix'=>'home2','middleware'=>'hlogin'],function()
{
	//退出登录
	Route::get('/over','Home\LoginController@over');
	//购物车
	Route::get('/shop','Home\ShopController@index');
	Route::post('/shopsub','Home\ShopController@submit');
	Route::get('/shopadd','Home\ShopController@add');
	Route::get('/shopdel/{id}','Home\ShopController@shopdel');
	Route::get('/cshop/{id}','Home\ShopController@cshop');
	//前台个人信息
	Route::resource('/pinfo','Home\PinfoController');
	//前台个人中心首页
	Route::resource('/person','Home\PersonController');
	//修改密码
	Route::get('/modify','Home\ModifyController@modify');
	Route::post('/domodify','Home\ModifyController@domodify');
	//收藏商品
	Route::resource('/cullect','Home\CullectController');

	Route::get('/cullect/del/{cid?}','Home\CullectController@del');
	// Route::get('/cullent','home\CullectController@cullent');
	//生成订单
 	Route::post('/orderlist/inst/{s}','Home\OrderlistController@inst');
	//查看全部有效订单
 	Route::resource('/orderlist','Home\OrderlistController');
 	//查看有状态订单
	Route::get('/orderlist/state/{a}','Home\OrderlistController@orderlsta');
	//订单详情页面
 	Route::get('/orderdetail/{id}','Home\DingdxqController@index');
	//修改订单状态
	Route::get('/orderlist/updat/{r}','Home\OrderlistController@doupdate');
	//收货地址
	Route::resource('/address','Home\AddressController');
	//设置默认地址
	Route::get('/address/defaut/{id}','Home\AddressController@defaut');
	//取消默认地址
	Route::get('/address/fal/{id}','Home\AddressController@fal');
	//生成订单
	Route::get('/buy/{orderlistid?}','Home\BuyController@index');
	//付款
	Route::get('/buy/date/{orderlistid?}','Home\BuyController@date');
	Route::resource('/buy','Home\BuyController');
	Route::get('/pj','Home\PjController@pj');
	Route::get('/payfor/{id}','Home\BuyController@date');
	Route::post('/buy/shopid','Home\BuyController@shopid');
	//Route::resource('/buy','Home\BuyController');
	//退货
	Route::post('/orderlist/rgood/{id?}','Home\OrderlistController@rgood');
	//收货
	Route::post('/orderlist/sgood/{id?}','Home\OrderlistController@sgood');
});
Route::get('/ajax/get','Home\CullectController@cullent');
Route::get('/jax/gt','Home\CullectController@qcullent');
//前台主页
Route::get('/','home\IndexController@index');
//用户评论
Route::get('/evaluate/{Goods_id}','home\IndexController@evaluate');
Route::get('/evaluat','home\IndexController@evaluat');
//列表
Route::get('/list/{GoodCate_id}','home\IndexController@list');
//详情
Route::get('/detail/{Goods_id}','home\IndexController@detail');
//前台登录
Route::get('/home1/login','Home\LoginController@login');
Route::post('/home1/dologin','Home\LoginController@dologin');
//前台注册
Route::get('/home1/register','Home\RegisterController@register');
Route::post('/home1/doregister','Home\RegisterController@doregister');
//忘记密码
Route::get('/home1/repwd','Home\SafetyController@repwd');
Route::post('/home1/check','Home\SafetyController@check');
Route::post('/home1/newpwd','Home\SafetyController@newpwd');
//前台验证码
Route::get('/home1/hmycode/{tmp}','Home\RegisterController@captch');

Route::get('/search','home\IndexController@search');
