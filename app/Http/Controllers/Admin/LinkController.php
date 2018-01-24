<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Link;

class LinkController extends Controller
{
    public function __construct(Link $link)
    {
        $this->link = $link;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // 判断有没有获取数据信息
        if (count($this->link->get())>0) { // 如果从数据表中能获取数据信息
            $links = $this->link->get(); //  获取数据
            return view('admin.config.link', compact('links'));
        }
        // 否则返回初始化信息
        return view('admin.config.link');        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 创建一个友情链接
        return view('admin.config.linkAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { // 保存数据
        $result = $this->link->create($request->all());
        // 如果存在 $result; 
        if ($result) {
            return response()->json(['info'=>'添加友情链接成功']);  // 返回一组json数据
        }
        return response()->json(['info'=>'添加友情链接失败']);        
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
        $model = $this->link->find($id);

        return view('admin.config.linkAdd', compact('model'));         
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
        $result = $this->link->find($id)->update($request->all());

        // 如果存在 $result; 
        if ($result) {
            return response()->json(['info'=>'修改友情链接成功']);  // 返回一组json数据
        }
        return response()->json(['info'=>'修改友情链接失败']);         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->link->find($id)->delete();  // delete移除一个数据
        return back();        
    }
}
