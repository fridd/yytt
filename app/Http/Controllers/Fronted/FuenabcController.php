<?php

namespace App\Http\Controllers\Fronted;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Channel;
class FuenabcController extends Controller
{
    public function __construct(Article $article, Channel $channel)
    {
        $this->article = $article;
        $this->channel = $channel;
    }
    public function index()
    {
        return view('fuenabc.home.index');
    }
    //尾部
    public function aboutFuen(){
        return view('fuenabc.home.about_us');
    }
    public function joinUs(){
        return view('fuenabc.home.join_us');
    }
    //课程特色
    public function kechengtese()
    {
        return view('fuenabc.home.curriculumfeatures ');
    }

    public function xinwendongtai()
    {
        return view('fuenabc.home.news');
    }

    //校区环境
    public function xiaoquhuanjing()
    {
        return view('fuenabc.home.environment');
    }
    public function fenbu(){
        return view('fuenabc.home.fenbu');
    }
    public function shebei(){
        return view('fuenabc.home.shebei');
    }
    public function xiangqing(){
        return view('fuenabc.home.xiangqing');
    }
    //联系我们
    public function lianxiwomen()
    {
        return view('fuenabc.home.contact');
    }
    public function news()
    {
        // 获取url后面的参数
        // $input = $request->get('site_id', 2); // 默认第一个
        return view('fuenabc.home.xinwenxiangqing');
    }
    public function kechengyuyue()
    {
        return view('fuenabc.home.reservations');
    }


}
