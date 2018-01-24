<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Article;
use App\Models\Channel;
use App\Models\Banner;
use App\Models\Page;
use App\Models\Map;
use App\Models\MessagesType;
use App\Models\MessageBoard;
use App\Models\Brand;
class WebController extends Controller
{
	public function __construct(Article $article, Banner $banner, Channel $channel, Page $page, Map $map, MessagesType $type, MessageBoard $message, Brand $brand)
	{
		$this->article = $article;
        $this->banner = $banner;
        $this->channel = $channel;
        $this->page = $page;
        $this->map = $map;
        $this->type = $type;
        $this->message = $message;
        $this->brand = $brand;
	}

    public function home()
    {
        // 获取前5条记录且状态是显示的  ，根据日期排序
        $banners = $this->banner->where('status', 1)->orderBy('updated_at','desc')->take(5)->get();
        // 集团要闻
        $arrindexnew1 = $this->article->where('cate_id',1)->where('status', 1)->orderBy('updated_at','desc')->orderBy('id', 'desc')->first();
        // 行业新闻
        $arrindexnew2 = $this->article->where('cate_id',2)->where('status', 1)->orderBy('updated_at','desc')->orderBy('id', 'desc')->first();
        // 媒体新闻
        $arrindexnew3 = $this->article->where('cate_id',3)->where('status', 1)->orderBy('updated_at','desc')->orderBy('id', 'desc')->first();
        return view('home.welcome', compact('banners','arrindexnew1', 'arrindexnew2', 'arrindexnew3'));
    }
    // 关于我们页面
    public function about()
    {
        // 获取当前的路由文件地址
        $filepath = '/'.request()->segment(1); // 当前路由文件地址

        // 获取当前的参数, 判断有没有参数的存在
        if (!empty($_SERVER["QUERY_STRING"])) {   
            $parameter = $_SERVER["QUERY_STRING"];
            // 与菜单表比对
            $path = $filepath.'?'.$parameter;    
            $id = $this->channel->where('url', $path)->where('status', 1)->first();
            $title = $id->title;   //  子级标题
            $id = $id->id;     // 子级id
        }else{
            // 如果没有参数，表示是直接在一级菜单点击的进入的
            $pid = $this->channel->where('url', $filepath)->where('status', 1)->first(); // 获取当前id值
            $pid = $pid->id;  //父级id
            // 获取第一个子菜单栏目id值
            $id = $this->channel->where('pid', $pid)->where('status', 1)->orderBy('sort', 'ASC')->first();
            $title = $id->title;               
            $id = $id->id;

        }
        // 获取与菜单表id相对应的page表单channel_id数据
        // 状态是显示，以时间倒序排序的第一条数据
            $page = $this->page->where('channel_id', $id)->where('status', 1)->orderBy('publish_at', 'DESC')->first();
           // 如果当前单页面没有填入数据
           if ($page == null) {
               $js = '正在建设中....';
               return view('home.about1', compact('js', 'title'));
           }
        $seo_key = $page->seo_key;
        $seo_title = $page->seo_title;
        $seo_description = $page->seo_description;        
        // 输出数据
        return view('home.about1', compact('page', 'title', 'seo_title', 'seo_key', 'seo_description'));
    }

    // 旗下品牌页面
    public function brand(Request $request)
    {
        // 获取当前的路由文件地址
        $filepath = '/'.request()->segment(1); // 当前路由文件地址

        // 获取当前的参数, 判断有没有参数的存在
        // $parameter = $_SERVER["QUERY_STRING"];
         if (!empty($_SERVER["QUERY_STRING"])) {  
            $parameter = $_SERVER["QUERY_STRING"];
            // 与菜单表比对
            $path = $filepath.'?'.$parameter;   
            $id = $this->channel->where('url', $path)->where('status', 1)->first();
            $title = $id->title;
            $id = $id->id;
        }else{
            // 如果没有参数，表示是直接在一级菜单点击的进入的
            $pid = $this->channel->where('url', $filepath)->where('status', 1)->first(); // 获取当前id值
            $pid = $pid->id;
            // 获取第一个子菜单栏目id值
            $id = $this->channel->where('pid', $pid)->where('status', 1)->orderBy('sort', 'ASC')->first();
            $title = $id->title;
            $id = $id->id;
        }
        if (!empty($_SERVER["QUERY_STRING"])) {
            if (substr($_SERVER["QUERY_STRING"],0,strrpos($_SERVER["QUERY_STRING"],'=')) == 'category') {
                // 条件筛选  显示且是对应的菜单类
                $maps = $this->map->where('channel_id', $id)->where('status', 1)->orderBy('id', 'ASC')->get();
                // 返回视图
                $seo_key = $maps[0]->seo_key;
                $seo_title = $maps[0]->seo_title;
                $seo_description = $maps[0]->seo_description;              
                return view('home.brand', compact('maps', 'title', 'seo_key', 'seo_title', 'seo_description'));
            }else{
                $type = $request->get('brandpage'); // 获取参数值
                $brand = $this->brand->where('type', $type)->where('status', 1)->orderBy('id', 'DESC')->first();
                $seo_key = $brand->seo_key;
                $seo_title = $brand->seo_title;
                $seo_description = $brand->seo_description;            
                return view('home.brandpage', compact('brand', 'title', 'seo_key', 'seo_title', 'seo_description'));  //  旗下品牌后两个栏目哦 
            }            
        }else{
            $maps = $this->map->where('channel_id', $id)->where('status', 1)->orderBy('id', 'ASC')->get();
            // 返回视图
            $seo_key = $maps[0]->seo_key;
            $seo_title = $maps[0]->seo_title;
            $seo_description = $maps[0]->seo_description;              
            return view('home.brand', compact('maps', 'title', 'seo_key', 'seo_title', 'seo_description'));            
        }         
        
    }

    // 新闻列表， 对新闻列表进行分类
    public function newsList(Request $request)
    {
        // 获取url后面的参数
        $input = $request->get('cate_id', 1); // 默认第一个
        switch ($input) {
            case '1':
                $title = '集团要闻';
                break;
            case '2':
                $title = '行业新闻';
                break;
            case '3':
                $title = '媒体报道';
                break;                        
            default:
                $title = '集团要闻';
                break;
        }
        $val = $this->article->where('cate_id', $input)->where('status', 1)->orderBy('publish_at','DESC')->orderBy('id', 'DESC');
        //记录条数 
        $count = $val->get()->count();
        //获取对应的cate_id和状态值，按日期降序排列， 获取前八条记录
        // 对新闻进行分类  前8条
        $news = $val->take(8)->get();
        // 获取新闻第一条记录
        $newFirst = $val->first();
        // 返回新闻列表页
        return view('home.news',compact('news','title','newFirst','count'));
    }

    // 新闻列表页Ajax加载
    //  写了一个api接口   路由在api.php文件
    public function news(Request $request)
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
    }

    // 人力资源页面,暂时对其进行单记录处理
    public function hr()
    {
        // 获取当前的路由文件地址
        $filepath = '/'.request()->segment(1); // 当前路由文件地址
        // 获取当前的参数, 判断有没有参数的存在
        if (!empty($_SERVER["QUERY_STRING"])) {   
            $parameter = $_SERVER["QUERY_STRING"];
            // 与菜单表比对
            $path = $filepath.'?'.$parameter;    
            $id = $this->channel->where('url', $path)->where('status', 1)->get();
            $title = $id[0]->title;
            $id = $id[0]->id;
        }else{
            // 在一级菜单点击进入，直接进入这个视图
            // 获取子菜单数据
            $id = $this->channel->where('url', $filepath)->where('status', 1)->get();
            $id = $id[0]->id;  //  获取父级id
            // 获取子级菜单信息

            $hr = $this->channel->where('status', 1)->where('pid', $id)->orderBy('sort', 'ASC')->get();
            return view('home.hr', compact('hr'));  //数据传入进去了
        }
        // 获取与菜单表id相对应的page表单channel_id数据
        // 状态是显示，以时间倒序排序的第一条数据
           $page = $this->page->where('channel_id', $id)->where('status', 1)->orderBy('publish_at', 'DESC')->first();
           // 如果当前单页面没有填入数据
           if ($page == null) {
               $js = '正在建设中....';
               return view('home.about', compact('js', 'title'));
           }
            $seo_key = $page->seo_key;
            $seo_title = $page->seo_title;
            $seo_description = $page->seo_description;           
        // 输出数据   about单页面
        return view('home.about', compact('parameter', 'page', 'title', 'seo_title', 'seo_key', 'seo_description'));
    }

    // 前台页面搜索
    public function search(Request $request)
    {
        // 获取搜索字段
        $search = $request->input('search');
        $news = $this->article->where('title', 'like', '%'.$search.'%')->where('status', 1)->orderBy('publish_at','DESC')->orderBy('id', 'DESC');

        // 显示前8条

        $count = $news->get()->count(); // 获取查询到的条数
        $values = $news->take(8)->get();  // 获取前8条记录
        foreach ($values as $value) {
            if ($value->cate_id == 1) {
                $value['type'] = '集团网站';
            }else if($value->cate_id == 2){
                $value['type'] = '行业新闻';
            }else{
                $value['type'] = '媒体报道';
            }
        }
        return view('home.search', compact('values', 'search', 'count'));
    }

   //  写了一个api接口   路由在api.php文件
    public function searchNew(Request $request)
    {
        // 获取url的参数，开始结束
        $start = $_REQUEST['start'];
        $end = $_REQUEST['end'];
        $search = $_REQUEST['search'];

        // 只获取状态值为1的数据
        $values = $this->article->where('status', 1)->where('title', 'like', '%'.$search.'%')->orderBy('publish_at', 'DESC')->orderBy('id', 'DESC')->skip($start)->take($end)->get();
        foreach ($values as $value) {
            if ($value->cate_id == 1) {
                $value['type'] = '集团网站';
            }else if($value->cate_id == 2){
                $value['type'] = '行业新闻';
            }else{
                $value['type'] = '媒体报道';
            }
        }        
        // 如果存在数据
        if ($values) {  // 如果取得数据
           return $values;
        }
    }

    // 联系我们
    public function contact(Request $request)
    {

        $title ='联系我们';
        if ($request->get('cate') == 'messages') { //  如果后面的参数是一个投诉建议
            $types = $this->type->get();  //  获取留言板类型
            $title = "投诉建议";
            $token = md5(time());
            $request->session()->put($token, 1);  //  设置一个session
            if (count($request->get('message'))>0) { //如果有参数进来
                $model = $this->message->find($request->get('message'));
                $type = $this->type->where('id', $model['message_type_id'])->first();
                $model['message_type_id'] =  $type['type'];
               return view('home.messages', compact('model', 'title'));  //  后台查看前台数据
            }
            //  返回一个前台留言板视图
            return view('home.messages', compact('types', 'token', 'title'));
            
        }
        return view('home.contact', compact('title'));

    }

}
