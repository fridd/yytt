<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

// 表模块
use App\Models\Config;
use App\Models\MessagesType;
use App\Models\Link;
use App\Models\MessageBoard;
use App\Models\Logo;

// 引入验证码对应的命名空间
use Gregwar\Captcha\CaptchaBuilder;
use Session;

use App\Http\Requests\MessagesRules;



class ConfigController extends Controller
{
	public function __construct(Config $config, MessagesType $type, Link $link, MessageBoard $message, Logo $logo)
	{
		$this->config = $config;  // 站点配置
        $this->type = $type;  // 留言板类型
        $this->link = $link; // 友情链接
        $this->message = $message; // 留言板信息
        $this->logo = $logo;  // logo表
	}

    public function config(Request $request)   // 站点信息
    {
        // 表单提交   两种表单提交方式  POST GET
        if ($request->isMethod('POST'))
        {
            foreach ($request->all() as $key => $value) {

                $this->config->where('name', $key)->update(array('value' => $value));  // 修改数据

            }
            // 返回一个提示信息
            return response()->json(['status' => 1, 'info' => '编辑站点信息成功。', 'url' => url('admin/config')], 201);
        }
        // 获取数据
        if (count($this->config->orderBy('sort')->get())>0) {

           $model = $this->config->where('site_id', session('siteid'))->orderBy('sort')->get();
            //返回
            return view('admin.config.config', compact('model'));
        }
        
    }
    // 增加留言类型
    public function messageAdd(Request $request)
    {
        if($request->isMethod('POST')){ // 数据POST方式 添加数据
            $result = $this->type->create($request->all());
            if($result){
                return response()->json(['info' => '添加成功']);
            }else{
                return response()->json(['info' => '添加失败']);
            }
        }

        if(count($this->type->get())>0){ // 如果存在数据
            $messages = $this->type->get();
            return view('admin.config.message_type', compact('messages'));
        }else{
            return view('admin.config.message_type');
        }
    }

    // 移除留言类型
    public function messageRemove(Request $request, $id){
        $this->type->find($id)->delete();  // 软删除
        return redirect('admin/messageAdd');
    }

    // 留言板管理
    public function messageBoard(Request $request)
    {
        $messages = $this->message;  //  留言板表
        if( $request->has('search') ){  // 检测是否有search字段
            $search = $request->get('search'); // 获取search字段值
            $messages = $messages->where('name', 'like','%'.$search.'%')->orWhere('tel', 'like','%'.$search.'%')->orWhere('email', 'like','%'.$search.'%')->orWhere('city', 'like','%'.$search.'%');
        }       
        // 返回到留言板管理视图
        $messages = $messages->orderBy('id', 'DESC')->paginate(15); // 获取数据
        foreach ($messages as $message) {
                $type = $this->type->where('id', $message['message_type_id'])->first();
                $message['message_type_id'] = $type['type'];
            }         
        return view('admin.config.message', compact('messages'));


    }

    // 前台留言板
    public function messagesIndex(Request $request)
    {
        // 前台留言板数据
        if ($request->getMethod() == 'POST') // 判断提交
        {
            $token = $request->input('token'); // 获取那个隐藏的数据
            if (empty($request->session()->get($token))) {  // 如果session的$token数据为空，则表示当前表单已经提交过了

                return response()->json(['info'=>'您已提交过了，请勿重复提交']);
            }

            $validator = Validator::make($request->all(), [
                'captcha' => 'required|captcha',
            ]);

            if ($validator->fails()){  //  如果不符合验证规则
                // 返回一个验证错误提示
                return response()->json(['info'=>'验证码填写错误，请输入正确的验证码']);
            }else{
                // 验证通过，则创建一条数据信息，前台post接收后台发送的数据信息
                $result = $this->message->create($request->all());
                if ($result) {  // 如果创建成功
                    // 创建成功，移除session数据
                    $request->session()->pull($token, null);
                    return response()->json(['info' => '留言板信息提交成功']);
                }else{
                    return response()->json(['info' => '留言板信息提交失败']);
                }
            }
        }

    }

    public function messageBoardRemove(Request $request, $id)
    {
        $this->message->find($id)->delete();    // 移除一条数据信息
        return back();
    }
}
