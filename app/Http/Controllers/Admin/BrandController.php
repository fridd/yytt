<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Brand;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Brand $brand)
    {
        $this->brand = $brand;
    }

    // public function index(Request $request)  // 入口在map控制器中
    // {
    //     $type = $request->get('param');  // 获取参数
    //     $brand = $this->brand;
    //     $title = "旗下品牌管理";
    //     if (count($brand->where('type', $type)->first())>0) {  // 取到数据
    //         $title = "旗下品牌修改";
    //         $model = $brand->where('type', $type)->first();
    //         return view('admin.brand.form', compact('title', 'model'));

    //     }
        
    //     return view('admin.brand.form', compact('title', 'type'));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $all = $request->all();  // 取到所有数据
        $result = $this->brand->create($all); // 创建
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        $type = $request->get('type');
        $result = $this->brand->where('type', $type)->first()->update($request->all());
        if ($result) {
            // 返回一段json数据
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
    public function remove($id)
    {
        $this->brand->find($id)->delete();
        return back();        
    }
}
