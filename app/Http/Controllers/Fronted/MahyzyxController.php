<?php

namespace App\Http\Controllers\Fronted;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Article;
use App\Models\Channel;


class MahyzyxController extends Controller
{

  public function __construct(Article $article, Channel $channel)
  {
    $this->article = $article;
        $this->channel = $channel;
  }

	public function index()
    {
      return view('mahyzyx.home.index');
    }

    public function about()
    {
      return view('mahyzyx.home.about');
    }

    public function case()
    {
      return view('mahyzyx.home.case');
    }

    public function service()
    {
      return view('mahyzyx.home.service');
    }

    public function xiaoqu()
    {
      return view('mahyzyx.home.xiaoqu');
    }

    public function news()
    {
      return view('mahyzyx.home.news');
    }

    public function contact()
    {
      return view('mahyzyx.home.contact');
    }
    //环境介绍详情页
    public function shizi()
    {
      return view('mahyzyx.home.shizi');
    }
    //课程介绍详情页
    public function shuangpaijian()
    {
      return view('mahyzyx.home.shuangpaijian');
    }
    //新闻详情页
    public function newslist()
    {
      return view('mahyzyx.home.newslist');
    }


    

    
}
