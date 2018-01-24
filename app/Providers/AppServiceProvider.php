<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

use App\Models\Channel;
use App\Models\Wechat\SeatActivity;

use App\Models\Config;
use App\Models\Logo;
use App\Models\Site;

class AppServiceProvider extends ServiceProvider
{
    private $seatCopys;
    private $logo;
    private $sites;
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (Schema::hasTable('channels') && Schema::hasTable('configs') && Schema::hasTable('seat_activities') && Schema::hasTable('logo')) {
            $channelgroup = Channel::where('pid', NULL)->where('status', 1)->oldest('sort');
            $channels = $channelgroup->where('site_id', 1)->get();
            foreach ($channels as $channel) {
                $channel['child'] = Channel::where('pid', $channel->id)->where('status', 1)->oldest('sort')->get();
            }
            $logo = Logo::oldest('updated_at')->oldest('id')->first();  // 前台的logo图片
            // 数据共享传递给前台首页
            view()->composer('layouts.app', function($view) use ($channels, $logo) {
                $view->with(compact('channels', 'logo'));
            });

            $channels2 = Channel::where('pid', NULL)->where('status', 1)->oldest('sort')->where('site_id',2)->get();
            foreach ($channels2 as $channel) {
                $channel['child'] = Channel::where('pid', $channel->id)->where('status', 1)->oldest('sort')->get();
            }
           
            //paowoer
            view()->composer('paowoer.layouts.index', function($view) use ($channels2, $logo) {
                $view->with(compact('channels2', 'logo'));
            });
            view()->composer('paowoer.home.paowoer', function($view) use ($channels2, $logo) {
                $view->with(compact('channels2', 'logo'));
            });
            view()->composer('paowoer.home.ceping', function($view) use ($channels2, $logo) {
                $view->with(compact('channels2', 'logo'));
            });
            view()->composer('paowoer.home.changguan', function($view) use ($channels2, $logo) {
                $view->with(compact('channels2', 'logo'));
            });
            view()->composer('paowoer.home.xunlian', function($view) use ($channels2, $logo) {
                $view->with(compact('channels2', 'logo'));
            });
            view()->composer('paowoer.home.tuandui', function($view) use ($channels2, $logo) {
                $view->with(compact('channels2', 'logo'));
            });
            view()->composer('paowoer.home.yanfa', function($view) use ($channels2, $logo) {
                $view->with(compact('channels2', 'logo'));
            });
            //课程介绍
            view()->composer('paowoer.home.class', function($view) use ($channels2, $logo) {
                $view->with(compact('channels2', 'logo'));
            });
            view()->composer('paowoer.home.zhtn', function($view) use ($channels2, $logo) {
                $view->with(compact('channels2', 'logo'));
            });
            view()->composer('paowoer.home.shinei', function($view) use ($channels2, $logo) {
                $view->with(compact('channels2', 'logo'));
            });
            view()->composer('paowoer.home.huwai', function($view) use ($channels2, $logo) {
                $view->with(compact('channels2', 'logo'));
            });
            //常见问题
            view()->composer('paowoer.home.changjianwenti', function($view) use ($channels2, $logo) {
                $view->with(compact('channels2', 'logo'));
            });

            $this->seatCopys = SeatActivity::where('status', 1)->get();
            view()->composer('wechat.seat.base', function($view) {
                $view->with(compact('seatCopys'));
            });
            // 做后台菜单, 视图共享数据
            view()->composer('admin.group', function($view){
                // 只有在session过期，还有改变了站点，session会被重新赋值
                if (session('siteid') == null || session('siteurl') == null || session('siteurl') == request()->url()) {
                    // 先删除指定session字段
                    session()->forget('siteid');
                    session()->forget('siteurl');
                    // 根据路由信息，获取值
                    $site_id = explode('=', $_SERVER["QUERY_STRING"])[1]; // 获取路由参数
                    $siteid = Site::where('url', $site_id)->first()->id;
                    $siteurl = request()->url();
                    // 再给session赋值
                    session(['siteid' => $siteid, 'siteurl'=>$siteurl]);
                }

                // 集团首页
                $nav = Channel::where('site_id', session('siteid'))->oldest('sort')->get();
                
                //  感觉$view就是所要传递到视图
                $view->with(compact('nav'));
            });

            // 前台内容页左侧菜单栏
            view()->composer('home.component.sidebar', function($view) {
                $path = '/'.request()->segment(1); // 当前路由文件地址

                // 获取当前路由一级菜单
                $parent = Channel::where('status', 1)->where('pid', null)->where('url', $path)->oldest('sort')->first();  // 获取当前父级路由
                // 获取当前路由一级菜单的子菜单   , 判断是否存在下一级菜单
                $child = Channel::where('status', 1)->where('pid', $parent->id)->oldest('sort')->get();
                
                $view->with(compact('parent', 'child'));
            });

            // 把config的数据传递给全部视图
            view()->composer('*', function($view) {
                $site = Config::all()->pluck('value', 'name')->toArray();  //获取 config 数据
                $view->with(compact('site'));
            });
        }

        if (Schema::hasTable('sites')) {
            view()->composer('admin.sitenav', function($view){
                $sites = Site::oldest('id')->get();
                $view->with(compact('sites'));
            });
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
