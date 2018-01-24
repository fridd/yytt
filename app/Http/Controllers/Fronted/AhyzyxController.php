<?php

namespace App\Http\Controllers\Fronted;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Article;
use App\Models\Channel;


class AhyzyxController extends Controller
{

    public function __construct(Article $article, Channel $channel)
    {
      $this->article = $article;
          $this->channel = $channel;
    }

	 public function index()

    {
      return view('ahyzyx.home.index');
    }

    public function about()
    {
      return view('ahyzyx.home.about');
    }
    public function course()
    {
      return view('ahyzyx.home.course');
    }

    
    public function join()
    {
      return view('ahyzyx.home.join');
    }
    
    public function news()
    {
      return view('ahyzyx.home.news');
    }
    
    public function Contact()
    {
      return view('ahyzyx.home.Contact');
    }
   
    public function  guanyuwomen()
    {
      return view('ahyzyx.home.guanyuwomen');
    }
    
    public function  jingpingaikuang()
    {
      return view('ahyzyx.home.jingpingaikuang');
    }
    public function  jingpinwenhua()
    {
      return view('ahyzyx.home.jingpinwenhua');
    }
    public function  jiaoshituandui()
    {
      return view('ahyzyx.home.jiaoshituandui');
    }
    public function  jiaoyuyoushi()
    {
      return view('ahyzyx.home.jiaoyuyoushi');
    }
    public function  icourse()
    {
      return view('ahyzyx.home.icourse');
    }
    public function  yuyue()
    {
      return view('ahyzyx.home.yuyue');
    }
    public function  qinzikecheng()
    {
      return view('ahyzyx.home.qinzikecheng');
    }
    public function xingyetedian ()
    {
      return view('ahyzyx.home.xingyetedian');
    }
    public function changjianwenti()
    {
      return view('ahyzyx.home.changjianwenti');
    }
    public function jiamengyoushi ()
    {
      return view('ahyzyx.home.jiamengyoushi ');
    }
    public function jiamengzhichi()
    {
      return view('ahyzyx.home.jiamengzhichi');
    }
    public function yuyuetiyan()
    {
      return view('ahyzyx.home.yuyuetiyan');
    }

    public function xinwenzhuankan()
    {
      return view('ahyzyx.home.xinwenzhuankan');
    }
    public function falvshengming()
    {
      return view('ahyzyx.home.falvshengming');
    }
    public function yinlekecheng()
    {
      return view('ahyzyx.home.yinlekecheng');
    }
    public function mengshikecheng()
    {
      return view('ahyzyx.home.mengshikecheng');
    }
    public function yundongkecheng()
    {
      return view('ahyzyx.home.yundongkecheng');
    }

    public function yujiaokecheng()
    {
      return view('ahyzyx.home.yujiaokecheng');
    }
    public function fenxiangyuedu()
    {
      return view('ahyzyx.home.fenxiangyuedu');
    }
    public function xinwenxiangqing()
    {
      return view('ahyzyx.home.xinwenxiangqing');
    }
    public function shouyexinwen()
    {
        return view('ahyzyx.home.shouyexinwen');
    }


   
}
