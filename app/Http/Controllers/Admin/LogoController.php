<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Logo;

class LogoController extends Controller
{
    public function __construct( Logo $logo )
    {
        $this->logo = $logo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (count($logo = $this->logo->get())>0) {   // 如果获得数据

            $model = $this->logo->orderBy('updated_at', 'DESC')->orderBy('id', 'DESC')->first(); // 根据日期、id排序获取第一个

            return view('admin.config.logo', compact('model'));
        }
        // 返回初始内容
        return view('admin.config.logo');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $all = $request->all();  //  获取所有数据

        if($this->logo->create($all)){

            return response()->json(['info' => 'logo上传成功']);
        }
        return response()->json(['info' => 'logo上传失败']);
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
        $all = $request->all();

        if ($this->logo->find($id)->update($all)) {
            return response()->json(['info'=>'修改logo配置成功']);
        }

        return response()->json(['info'=>'修改logo配置失败']);
    }
}
