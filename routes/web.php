<?php
use Illuminate\Support\Facades\Input;
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
Route::get('/', 'Web\WebController@home'); // 返回首页
Route::get('/about', 'Web\WebController@about');  // 关于我们
Route::get('/brand', 'Web\WebController@brand'); //旗下品牌
Route::get('/news', 'Web\WebController@newsList');  // 新闻列表
Route::get('/news/{id}', 'Admin\ArticleController@show');  // 新闻内容
Route::get('/hr', 'Web\WebController@hr');  // 人力资源
Route::get('/contact', 'Web\WebController@contact');  // 联系我们
Route::get('/contactmessages', 'Web\WebController@messages');  // 前台留言板
Route::post('/messages/info', 'Admin\ConfigController@messagesIndex'); // 接收前台留言板传递的数据
Route::post('/index/search', 'Web\WebController@search');//前端页面搜索


Route::resource('/actor', 'ActorController');
Route::get('/phpinfo', function () { echo phpinfo(); return ''; });

Route::get('/start', function() {
    session()->put('name', 'shorlyn');
    return redirect('/start');
});
Route::get('/end', function() {dd(session()->get('name'));});

Route::any('/wechat/serve', 'Wechat\IndexController@serve');
Route::any('/wechat/oauth_callback', 'Wechat\SeatController@oauth');

Route::middleware(['wechat.oauth'])->group(function () {
    Route::get('/wechat/user', function() {
        $user = session('wechat.oauth_user');
        dd($user);
    });
    Route::get('/wechat/seat', 'Wechat\SeatController@seat');
    Route::get('/wechat/myorder', 'Wechat\SeatController@myorder');
    Route::get('/wechat/reserve/{id}', 'Wechat\SeatController@reserve');
    Route::post('/wechat/reserve', 'Wechat\SeatController@selected');
    Route::get('/wechat/seatpay', 'Wechat\SeatController@seatpay');
    Route::get('/wechat/pay/{orderid}', 'Wechat\IndexController@pay');
    Route::get('/wechat/pay', 'Wechat\IndexController@pay');
});

// 默认路由管理
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// 中间件，验证用户是否已经登录
Route::middleware(['auth'])->group(function () {
    route::get('/contactmessages/message', 'Web\WebController@messages'); // 查看留言板
    Route::get('/admin', 'Admin\IndexController@index'); // 返回后台视图
    Route::get('/admin/nav', 'Admin\IndexController@nav');
    Route::get('admin/site', 'Admin\ConfigController@config');  // 获取站点配置数据
    Route::post('admin/site', 'Admin\ConfigController@config');   // 修改站点配置数据

    Route::get('admin/config', 'Admin\ConfigController@config');   // 站点配置数据
    Route::resource('/admin/logo', 'Admin\LogoController', ['only'=>['index', 'store', 'update']]);  // logo上传管理
    Route::get('/admin/messageBoardManagement', 'Admin\ConfigController@messageBoard');   // 留言板管理
    Route::get('admin/messageBoardRemove/{id}', 'Admin\ConfigController@messageBoardRemove'); // 移除留言内容
    Route::resource('admin/messagesType', 'Admin\MessagesController',['only'=>['index', 'store', 'destroy']]); // 留言类型管理
    Route::resource('admin/link', 'Admin\LinkController');  //友情链接管理
    Route::resource('/admin/user', 'Admin\UserController');  // 用户资源管理
    Route::resource('/admin/role', 'Admin\RoleController');  // 角色管理
    Route::resource('/admin/permission', 'Admin\PermissionController');  // 设置权限管理
    Route::resource('/admin/banner', 'Admin\BannerController'); //轮播管理
    Route::resource('/admin/news', 'Admin\ArticleController'); // 新闻管理
    // Route::post('/admin/uploads', 'Admin\ArticleController@uploads');
    Route::resource('/admin/channel', 'Admin\ChannelController');       // 菜单分类管理
    Route::resource('/admin/brand', 'Admin\MapController');  // 旗下品牌地图管理
    Route::resource('/admin/page', 'Admin\PageController', ['only'=>['index', 'store', 'update']]); // 单页面资源管理
    Route::resource('admin/brandpage', 'Admin\BrandController');  // 旗下品牌后两个栏目管理
    Route::get('admin/brandpage/remove/{id}', 'Admin\BrandController@remove');  // 删除旗下品牌后两个栏目
    Route::get('/admin/page/remove/{id}', 'Admin\PageController@remove'); //删除一条单页面数据
    Route::post('/admin/changePassword', 'Admin\UserController@changePassword');  // 修改密码
    // 微信选座
    Route::get('/admin/wechat', 'Wechat\IndexController@index');
    Route::resource('/admin/wechat/seat/activity', 'Wechat\SeatActivityController');
    Route::resource('/admin/wechat/seat/order', 'Wechat\SeatOrderController');
    // 站点管理
    Route::resource('/admin/sites', 'Admin\SiteController');
    
});

 // 跑沃尔
Route::match(['get', 'post'], '/{class}/{method?}', function ($class, $method, $params = null) {
    $class = 'App\Http\Controllers\\Fronted\\' . ucfirst($class) . 'Controller';
    $method = $method ?? 'index';
    $call = $class . '@' . $method;
    return $params
        ? App::call($call, explode('/', $params))
        : App::call($call);
});
