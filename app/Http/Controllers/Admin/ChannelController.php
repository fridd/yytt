<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Channel;
use App\Models\Site;

class ChannelController extends Controller
{
	/**
	 * 菜单模型
	 * @var [type]
	 */
	private $channel;
    private $site;
	/**
	 * construct
	 * @param [type] $foo [description]
	 */
	public function __construct(Channel $channel, Site $site)
	{
		$this->channel = $channel;
        $this->site = $site;
	}

	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $channels = $this->channel;
        // 如果存在数据  // 查询
        if($request->has('search')){
            $search = $request->get('search');
            $channels = $channels->where('title', 'like', '%'.$search.'%')->orWhere('title_en', 'like', '%'.$search.'%')->orWhere('url', 'like', '%'.$search.'%')->orWhere('id', $search);
        }
		$title = '菜单管理';
        // 此处的$channels是继承上面的
		$channels = $channels->oldest('url')->oldest('id')->where('site_id', session('siteid'))->paginate(15);
        return view('admin.channel.index', compact('title', 'channels'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$title = '添加菜单';
        // 上级菜单
		$pids = $this->channel->where('pid', null)->where('site_id', session('siteid'))->where('status', 1)->pluck('title', 'id');
        // $single = [0=>'多记录模型', 1=>'单记录模型', 2=>'图片模型', 3=>'地图模型', 4=>'外链接' ];
        $site_id = $this->site->pluck('name', 'id'); 
        $sort = $this->channel->select('sort')->latest('sort')->first();  //  获取最大的排序
        return view('admin.channel.form', compact('title', 'pids', 'sort', 'site_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $result = $this->channel->create($request->all());

        if ($result) {
            return response()->json(['message' => '添加菜单成功。'], 201);
        }

        return response()->json(['message' => '添加菜单失败。'], 400);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = '修改菜单';
		$pids = $this->channel->where('pid', null)->where('site_id', session('siteid'))->where('status', 1)->pluck('title', 'id');
        $site_id = $this->site->pluck('name', 'id');
        $model = $this->channel->find($id);
        // $single = [0=>'多记录模型', 1=>'单记录模型', 2=>'图片模型', 3=>'地图模型', 4=>'父级栏目无模型', 5=>'外连接' ];
        return view('admin.channel.form', compact('title', 'pids', 'model', 'site_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $result = $this->channel->find($id)->update($request->all());

        if ($result) {
            return response()->json(['message' => '修改菜单成功。'], 201);
        }

        return response()->json(['message' => '修改菜单失败。'], 400);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->channel->find($id)->delete();
        // 父级栏目删除，其子栏目自动删除
        $this->channel->where('pid', $id)->delete();
        return back();        
    }
}
