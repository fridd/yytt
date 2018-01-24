<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Map;
use App\Models\Channel;

use App\Http\Requests\MapRules;
use App\Models\Brand;

class MapController extends Controller
{
  /**
	 * 菜单模型
	 * @var [type]
	 */
	private $map;

	/**
	 * construct
	 * @param [type] $foo [description]
	 */
	public function __construct(Map $map, Channel $channel, Brand $brand)
	{
        $this->channel = $channel;
		$this->map = $map;
        $this->brand = $brand;
	}

	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       // substr($_SERVER["QUERY_STRING"],0,strrpos($_SERVER["QUERY_STRING"],'='))   // 截取=之前的字符
        if (substr($_SERVER["QUERY_STRING"],0,strrpos($_SERVER["QUERY_STRING"],'=')) == 'category') {
            $category = $request->get('category');  // 获取参数值
            $filepath =  '/'.request()->segment(2);
            $path = $filepath.'?category='.$category;
            // 比对  //查询当前菜单的id与title
            $channel = $this->channel->where('url', $path)->get();
            $id = $channel[0]->id;
            // 获取当前栏目名
            $title = $channel[0]->title;
            // 表连接，获取users表中的name字段
            // 获取在maps表中与菜单表id一致的记录, 根据二级菜单来分类
            $maps = $this->map->where('channel_id', $id)->get();
            return view('admin.map.index', compact('title', 'maps', 'id'));            
        }

        //  这是第二种参数
        if (substr($_SERVER["QUERY_STRING"],0,strrpos($_SERVER["QUERY_STRING"],'=')) == 'brandpage') {
            $type = $request->get('brandpage');  // 获取参数
            $filepath =  '/'.request()->segment(2);
            $path = $filepath.'?brandpage='.$type;
            // 比对  //查询当前菜单的id与title
            $channel = $this->channel->where('url', $path)->get();
            $id = $channel[0]->id;
            // 获取当前栏目名
            $title = $channel[0]->title;
            $brand = $this->brand;
            if (count($brand->where('type', $type)->first())>0) {  // 取到数据
                $model = $brand->where('type', $type)->first();
                return view('admin.brand.form', compact('title', 'model'));

            }
            return view('admin.brand.form', compact('title', 'type'));            
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $mapid = $request->get('mapid', 19);
        $mapTitle = $this->channel->where('id', $mapid)->get();
        $mapTitle = $mapTitle[0]->title;
        $title = '新建旗下品牌---'.$mapTitle;
        return view('admin.map.form', compact('title', 'mapid'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MapRules $request)
    {
        // 保存数据
        $result = $this->map->create($request->all());
        if ($result) {
            return response()->json(['message' => '添加成功。'], 201);
        }
        return response()->json(['message' => '添加失败。'], 400);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $map = $this->map->find($id);
        // 直接跳转到前台页面
        return view('admin.map.show', compact('map'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // 修改
        $model = $this->map->find($id);
        return view('admin.map.form', compact('model','title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MapRules $request, $id)
    {
        //保存修改

        $result = $this->map->find($id)->update($request->all());

        if ($result) {
            return response()->json(['message' => '修改成功。'], 201);
        }

        return response()->json(['message' => '修改失败。'], 400);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->map->find($id)->delete();
        // 返回上一页,并刷新
        return back();        
    }
}
