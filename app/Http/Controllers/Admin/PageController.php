<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Page;
use App\Models\Channel;

use App\Http\Requests\PageRules;
class PageController extends Controller
{
    public function __construct(Page $page, Channel $channel)
    {
    	$this->page = $page;
        $this->channel = $channel;
    }

    // 显示数据
 	public function index(Request $request)
    {
        // 获取参数值， 当前id
        $id = $request->get('id');
        if(count($this->page->where('channel_id', $id)->get()) !== 0){ //如果取到数据执行下面的操作  一个菜单只有一个id对应一个单页面
            $title = $this->channel->find($id)->title ?? '单页面管理';
            $model = $this->page->where('channel_id', $id)->get();
            $model = $model[0];
            $url = $this->channel->find($id)->url;
            return view('admin.page.form', compact('title', 'model', 'url'));
        }else{
            $title = $this->channel->find($id)->title ?? '单页面管理';  //  如果初始没有数据
            return view('admin.page.form', compact('title','id'));
        }
    }

    // 保存我创建的数据
    public function store(PageRules $request)
    {
        $result = $this->page->create($request->all());

        if ($result) {
            return response()->json(['message' => '添加文章成功。'], 201);
        }

        return response()->json(['message' => '添加文章失败。'], 400);
    }

    public function edit($id)
    {
        $model = $this->page->find($id);
        $model = explode(';', $model->newimg);

        return view('admin.page.form', compact('model',''));
    }

    // 修改数据 
    public function update(PageRules $request, $id)
    {
        //  $id  就是路由id参数
        $result = $this->page->find($id)->update($request->all());

        if ($result) {
            // 返回一段json数据
            return response()->json(['message' => '修改文章成功。'], 201);
        }
        return response()->json(['message' => '修改文章失败。'], 400);
    }

    // 删除数据
    public function remove($id)
    {
        // 删除记录
        $this->page->find($id)->delete();
        return back();
    }
}
