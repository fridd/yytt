<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\MessagesType;
use App\Models\MessageBoard;

// 引入验证码对应的命名空间
use Gregwar\Captcha\CaptchaBuilder;
use Session;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function __construct( MessagesType $type, MessageBoard $message )
    {
        $this->type = $type;  // 留言板类型
        $this->message = $message; // 留言板信息
    }

    public function index()
    {
        if(count($this->type->get())>0){ // 如果存在数据
            $messages = $this->type->get();
            return view('admin.config.message_type', compact('messages'));
        }else{
            return view('admin.config.message_type');
        }        
    }

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
    public function store(Request $request)  //  保存验证
    {
        $result = $this->type->create($request->all());
        if($result){
            return response()->json(['info' => '添加成功']);
        }else{
            return response()->json(['info' => '添加失败']);
        }        
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->type->find($id)->delete();  // 软删除
        return back();
    }
}
