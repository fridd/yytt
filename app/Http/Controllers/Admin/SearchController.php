<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class SearchController extends Controller
{
    // /admin/admin/insert  路由
    // 数据填充插入 菜单部分
    public function insert()
    {
        DB::insert('insert into yzyx_channels (id, pid, title, title_en, url, sort, status, category, target, single, created_at, updated_at, deleted_at) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
            [1, NULL, '首页', 'Home', '/', 1, 1, 1, 0, 0, '2017-09-25 08:57:54', '2017-09-25 08:57:54', NULL]
        );
        DB::insert('insert into yzyx_channels (id, pid, title, title_en, url, sort, status, category, target, single, created_at, updated_at, deleted_at) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
                 [2, NULL, '关于我们', 'About', '/about', 2, 1, 1, 0, 0, '2017-09-25 08:58:25', '2017-09-25 08:58:25', NULL]
            );        
        DB::insert('insert into yzyx_channels (id, pid, title, title_en, url, sort, status, category, target, single, created_at, updated_at, deleted_at) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
               [3, NULL, '旗下品牌', 'Brand', '/brand', 3, 1, 1, 0, 0, '2017-09-25 08:58:57', '2017-09-25 08:58:57', NULL]
            ); 
        DB::insert('insert into yzyx_channels (id, pid, title, title_en, url, sort, status, category, target, single, created_at, updated_at, deleted_at) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
              [4, NULL, '新闻中心', 'News', '/news', 4, 1, 1, 0, 0, '2017-09-25 08:59:38', '2017-09-26 08:06:42', NULL]
            ); 
        DB::insert('insert into yzyx_channels (id, pid, title, title_en, url, sort, status, category, target, single, created_at, updated_at, deleted_at) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
               [5, NULL, '人力资源', 'Hr', '/hr', 5, 1, 1, 0, 0, '2017-09-25 08:59:59', '2017-09-25 08:59:59', NULL]
            ); 
        DB::insert('insert into yzyx_channels (id, pid, title, title_en, url, sort, status, category, target, single, created_at, updated_at, deleted_at) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
               [6, NULL, '联系我们', 'Contact', '/contact', 6, 1, 1, 0, 0, '2017-09-25 09:00:25', '2017-09-25 09:00:25', NULL]
            ); 
        DB::insert('insert into yzyx_channels (id, pid, title, title_en, url, sort, status, category, target, single, created_at, updated_at, deleted_at) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
                [7, 2, '集团简介', 'abstract', '/about?pageurl=abstract', 7, 1, 1, 0, 1, '2017-09-26 02:06:10', '2017-09-28 07:03:55', NULL]
            ); 
        DB::insert('insert into yzyx_channels (id, pid, title, title_en, url, sort, status, category, target, single, created_at, updated_at, deleted_at) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
        [8, 2, '发展历程', 'development history', '/about?pageurl=history', 8, 1, 1, 0, 1, '2017-09-26 06:54:56', '2017-09-28 07:04:06', NULL]
            ); 
        DB::insert('insert into yzyx_channels (id, pid, title, title_en, url, sort, status, category, target, single, created_at, updated_at, deleted_at) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
               [9, 2, '企业文化', 'business culture', '/about?pageurl=culture', 9, 1, 1, 0, 1, '2017-09-26 06:56:03', '2017-09-28 07:04:15', NULL]
            ); 
        DB::insert('insert into yzyx_channels (id, pid, title, title_en, url, sort, status, category, target, single, created_at, updated_at, deleted_at) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
        [10, 2, '集团荣誉', 'Honor', '/about?pageurl=honor', 10, 1, 1, 0, 1, '2017-09-26 06:57:31', '2017-09-28 07:04:29', NULL]
            ); 
        DB::insert('insert into yzyx_channels (id, pid, title, title_en, url, sort, status, category, target, single, created_at, updated_at, deleted_at) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
               [11, 5, '人才理念', 'HUMAN  RESOURCE  VALUES', '/hr?pageurl=resource', 11, 1, 1, 0, 1, '2017-09-27 05:45:37', '2017-10-06 02:01:07', NULL]
            ); 
        DB::insert('insert into yzyx_channels (id, pid, title, title_en, url, sort, status, category, target, single, created_at, updated_at, deleted_at) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
              [12, NULL, '轮播管理', 'banner', '/banner', 7, 0, 1, 0, 0, '2017-09-27 06:43:19', '2017-09-28 05:44:22', NULL]
            ); 
        DB::insert('insert into yzyx_channels (id, pid, title, title_en, url, sort, status, category, target, single, created_at, updated_at, deleted_at) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
        [13, 5, '社会招聘', 'SOCIAL RECRUITMENT', '/hr?pageurl=social', 12, 1, 1, 0, 1, '2017-09-27 06:47:04', '2017-10-06 02:01:19', NULL]
            ); 
        DB::insert('insert into yzyx_channels (id, pid, title, title_en, url, sort, status, category, target, single, created_at, updated_at, deleted_at) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
        [14, 5, '校园招聘', 'CAMUSE RECRUITMENT', '/hr?pageurl=amuse', 13, 1, 1, 0, 1, '2017-09-27 06:48:06', '2017-10-06 02:01:01', NULL]
            );
        DB::insert('insert into yzyx_channels (id, pid, title, title_en, url, sort, status, category, target, single, created_at, updated_at, deleted_at) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
              [16, 4, '集团要闻', 'Group News', '/news?cate_id=1', 15, 1, 1, 0, 0, '2017-09-27 09:10:17', '2017-09-27 09:20:09', NULL]
            ); 
        DB::insert('insert into yzyx_channels (id, pid, title, title_en, url, sort, status, category, target, single, created_at, updated_at, deleted_at) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
               [17, 4, '行业新闻', 'Industry News', '/news?cate_id=2', 16, 1, 1, 0, 0, '2017-09-27 09:12:33', '2017-09-27 09:12:33', NULL]
            ); 
        DB::insert('insert into yzyx_channels (id, pid, title, title_en, url, sort, status, category, target, single, created_at, updated_at, deleted_at) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
               [18, 4, '媒体报道', 'media report', '/news?cate_id=3', 17, 1, 1, 0, 0, '2017-09-27 09:17:30', '2017-09-27 09:17:30', NULL]
            ); 
         DB::insert('insert into yzyx_channels (id, pid, title, title_en, url, sort, status, category, target, single, created_at, updated_at, deleted_at) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
               [19, 3, '艺朝艺夕', 'yzyx', '/brand?category=yzyx', 18, 1, 1, 0, 0, '2017-09-28 09:04:30', '2017-09-29 01:25:51', NULL]
            ); 
        DB::insert('insert into yzyx_channels (id, pid, title, title_en, url, sort, status, category, target, single, created_at, updated_at, deleted_at) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
            [20, 3, '弗恩英语', 'feyy', '/brand?category=feyy', 19, 1, 1, 0, 0, '2017-09-29 01:05:30', '2017-09-29 01:30:29', NULL]
          );     
        DB::insert('insert into yzyx_channels (id, pid, title, title_en, url, sort, status, category, target, single, created_at, updated_at, deleted_at) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
            [21, 3, '跑沃尔', 'pwr', '/brand?category=pwr', 20, 1, 1, 0, 0, '2017-09-29 06:24:29', '2017-09-29 06:24:29', NULL]
          );
        DB::insert('insert into yzyx_channels (id, pid, title, title_en, url, sort, status, category, target, single, created_at, updated_at, deleted_at) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
            [26, 3, '艺课堂', 'ykt', '/brand?brandpage=ykt', 24, 1, 1, 0, 0, '2017-09-29 06:24:29', '2017-09-29 06:24:29', NULL]
          );
        DB::insert('insert into yzyx_channels (id, pid, title, title_en, url, sort, status, category, target, single, created_at, updated_at, deleted_at) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
            [27, 3, '奥莉娜', 'aln', '/brand?brandpage=aln', 25, 1, 1, 0, 0, '2017-09-29 06:24:29', '2017-09-29 06:24:29', NULL]
          );  
        DB::insert('insert into yzyx_channels (id, pid, title, title_en, url, sort, status, category, target, single, created_at, updated_at, deleted_at) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
            [24, 6, '投诉建议', 'Complaints', '/contact?cate=messages', 22, 1, 1, 1, 0, '2017-09-29 06:24:29', '2017-09-29 06:24:29', NULL]
          );           
        DB::insert('insert into yzyx_channels (id, pid, title, title_en, url, sort, status, category, target, single, created_at, updated_at, deleted_at) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
            [23, 6, '联系我们', 'touchus', '/contact?cate=touchus', 21, 1, 1, 0, 0, '2017-09-29 06:24:29', '2017-09-29 06:24:29', NULL]
          );                     
    }

}
