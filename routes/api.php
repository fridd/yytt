<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('weixin/enter/getclass', 'Weixin\EnterController@getclass');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// 我添加的代码块 开始

// 加载新闻列表
Route::get('/data/dataJson', 'Web\WebController@news');

//首页新闻加载
Route::get('/data/indexNew', 'Web\WebController@indexNew');

//更多的搜索结果 
Route::get('data/searchNew', 'Web\WebController@searchNew');

// 我添加的代码块结束
Route::post('/upload', 'Admin\ArticleController@upload');
