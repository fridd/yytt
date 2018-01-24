<?php

namespace App\Http\Controllers\Fronted;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Article;
use App\Models\Channel;
use App\Models\Page;



class PowerController extends Controller
{

  public function __construct(Article $article, Channel $channel, page $page)
  {
        $this->article = $article;
        $this->channel = $channel;
        $this->page = $page;

  }



	public function index()
    {
      return view('paowoer.home.index');
    }

    public function paowoer()
    {
      return view('paowoer.home.paowoer');
    }

     public function class()
    {
      return view('paowoer.home.class');
    }

     public function tuandui()
    {
        $all = $this->page->where('site_id',2)->where('channel_id',37)->orderBy('publish_at', 'DESC')->get();

        $new = $all->first();
        
        $img = $new->newimg;
       
        $newimg = explode(';',$img);

      return view('paowoer.home.tuandui', compact('new','newimg'));
    }

    public function changjianwenti()
    {
      $all = $this->page->where('site_id',2)->where('channel_id',32)->orderBy('publish_at', 'DESC')->get();

        $new = $all->first();
        
        $img = $new->newimg;
       
        $newimg = explode(';',$img);

      return view('paowoer.home.changjianwenti', compact('new','newimg'));
    }

    public function news(Request $request)
    {
      // 获取url后面的参数
        // $input = $request->get('site_id', 2); // 默认第一个

        // $val = $this->article->where('site_id', 2)->where('status', 1)->orderBy('publish_at','DESC')->orderBy('id', 'DESC');
        $val = $this->article->where('newsint', 'like','%' . 2 . ',%')->where('status', 1)->orderBy('publish_at','DESC')->orderBy('id', 'DESC');
        //记录条数 
        $count = $val->get()->count();
        //获取对应的cate_id和状态值，按日期降序排列， 获取前八条记录
        // 对新闻进行分类  前8条
        $news = $val->take(8)->get();
        // 获取新闻第一条记录
        $newFirst = $val->first();
        // 返回新闻列表页
        return view('paowoer.home.news',compact('news','title','newFirst','count'));
    }

    // 新闻列表页Ajax加载
    //  写了一个api接口   路由在api.php文件
    public function new(Request $request)
    {
        // 获取url的参数，开始结束
        $start = $_REQUEST['start'];
        $end = $_REQUEST['end'];
        $cate_id = $_REQUEST['cate_id'];
        // 只获取状态值为1的数据
        $all = $this->article->where('status', 1)->where('cate_id', $cate_id)->orderBy('publish_at', 'DESC')->orderBy('id', 'DESC')->skip($start)->take($end)->get();
        // 返回一条json数据
        if ($all) {  // 如果取得数据
           return $all;
        }


      // return view('paowoer.home.news');
    }

    public function newslist(Request $request)
    {
        $id = $request->get('id');
        $new = $this->article->find($id);
        $img = $new->newimg;
        $newimg = explode(';',$img);
        // dd($newimg);

        return view('paowoer.home.newslist', compact('new','newimg'));
      
    }


    public function contact()
    {
      return view('paowoer.home.contact');
    }

     public function changguan()
    {

        $all = $this->page->where('site_id',2)->where('channel_id',34)->orderBy('publish_at', 'DESC')->get();

        $new = $all->first();
        
        $img = $new->newimg;
       
        $newimg = explode(';',$img);

      return view('paowoer.home.changguan', compact('new','newimg'));
    }

    public function ceping(Request $request)
    {
        
        $all = $this->page->where('site_id',2)->where('channel_id',35)->orderBy('publish_at', 'DESC')->get();

        $new = $all->first();
        
        $img = $new->newimg;
       
        $newimg = explode(';',$img);

      return view('paowoer.home.ceping', compact('new','newimg'));
    }

    public function xunlian()
    {

      $all = $this->page->where('site_id',2)->where('channel_id',36)->orderBy('publish_at', 'DESC')->get();

        $new = $all->first();
        
        $img = $new->newimg;
       
        $newimg = explode(';',$img);

      return view('paowoer.home.xunlian', compact('new','newimg'));
      
    }

    public function yanfa()
    {

      $all = $this->page->where('site_id',2)->where('channel_id',38)->orderBy('publish_at', 'DESC')->get();

        $new = $all->first();
        
        $img = $new->newimg;
       
        $newimg = explode(';',$img);

      return view('paowoer.home.yanfa', compact('new','newimg'));
      
    }

     public function biaodan()
    {
      return view('paowoer.home.biaodan');
    }

    public function shinei()
    {
      $all = $this->page->where('site_id',2)->where('channel_id',40)->orderBy('publish_at', 'DESC')->get();

        $new = $all->first();
        
        $img = $new->newimg;
       
        $newimg = explode(';',$img);

      return view('paowoer.home.shinei', compact('new','newimg'));
    }

    public function huwai()
    {
      $all = $this->page->where('site_id',2)->where('channel_id',41)->orderBy('publish_at', 'DESC')->get();

        $new = $all->first();
        
        $img = $new->newimg;
       
        $newimg = explode(';',$img);

      return view('paowoer.home.huwai', compact('new','newimg'));
    }

    public function zhtn()
    {
      $all = $this->page->where('site_id',2)->where('channel_id',39)->orderBy('publish_at', 'DESC')->get();

        $new = $all->first();
        
        $img = $new->newimg;
       
        $newimg = explode(';',$img);

      return view('paowoer.home.zhtn', compact('new','newimg'));
    }


    
}
