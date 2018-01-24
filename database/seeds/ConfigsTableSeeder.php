<?php

use Illuminate\Database\Seeder;

class ConfigsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		// 网站信息配置
		DB::table('configs')->insert([
            [
    			'name'			=>	'WEB_SITE_TITLE',
    			'title'			=>	'网站标题',
    			'extra'			=>	'',
    			'remark'		=>	'网站标题前台显示标题',
    			'value'			=>	'艺朝艺夕集团官网',
    			'sort'			=>	1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
    			'name'			=>	'WEB_SITE_DESCRIPTION',
    			'title'			=>	'网站描述',
    			'extra'			=>	'',
    			'remark'		=>	'网站搜索引擎描述',
    			'value'			=>	'CSharp、PHP、软件开发',
    			'sort'			=>	1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
    			'name'			=>	'WEB_SITE_KEYWORD',
    			'title'			=>	'网站关键字',
    			'extra'			=>	'',
    			'remark'		=>	'网站搜索引擎关键字',
    			'value'			=>	'CSharp、PHP、Laravel5、Laravel、Html、CSS、软件开发',
    			'sort'			=>	1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
    			'name'			=>	'WEB_SITE_CLOSE',
    			'title'			=>	'关闭站点',
    			'extra'			=>	'0:关闭,1:开启',
    			'remark'		=>	'站点关闭后其他用户不能访问，管理员可以正常访问',
    			'value'			=>	'1',
    			'sort'			=>	1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
    			'name'			=>	'WEB_SITE_ICP',
    			'title'			=>	'网站备案号',
    			'extra'			=>	'',
    			'remark'		=>	'设置在网站底部显示的备案号，如“皖ICP备16008888号-1',
    			'value'			=>	'皖ICP备16008888号',
    			'sort'			=>	1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
    			'name'			=>	'DEVELOP_MODE',
    			'title'			=>	'开启开发者模式',
    			'extra'			=>	'0:关闭1:开启',
    			'remark'		=>	'是否开启开发者模式1',
    			'value'			=>	'0',
    			'sort'			=>	1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]
		]);
    }
}
