<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use App\Models\Banner;
use App\User;

use App\Http\Requests\BannerRules;

class BannerController extends Controller
{
    /**
	 * 菜单模型
	 * @var [type]
	 */
	private $banner;

	/**
	 * construct
	 * @param [type] $foo [description]
	 */
	public function __construct(Banner $banner, User $user)
	{
        $this->user = $user;
		$this->banner = $banner;
	}

	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$title = '轮播图管理';
        $banners = $this->banner->orderBy('id', 'DESC')->paginate(15);
        foreach ($banners as $banner) {  //  获取作者名称
            $user = $this->user->find($banner['user_id']);
            $banner['name'] = $user->name;
        }
        return view('admin.banner.index', compact('title', 'banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$title = "新建轮播";
        return view('admin.banner.form', compact('title'));
    }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    public function store(BannerRules $request)
    {
        $result = $this->banner->create($request->all());

        if ($result) {
            return response()->json(['message' => '添加轮播成功。'], 201);
        }

        return response()->json(['message' => '添加轮播失败。'], 400);
    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function show($id)
    {
        $article = $this->banner->find($id); 
        // 增加查看次数
        $article->view += 1;
        $article->save();
        // return view('home.banner-show', compact('article'));

        
    }
    // *
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
     
    public function edit($id)
    {
    	$title = "修改轮播";
        $model = $this->banner->find($id);
        return view('admin.banner.form', compact('title', 'model'));
    }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function update(BannerRules $request, $id)
    {
        $result = $this->banner->find($id)->update($request->all());

        if ($result) {
            return response()->json(['message' => '修改文章成功。'], 201);
        }
        return response()->json(['message' => '修改文章失败。'], 400);
    }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function destroy($id)
    {
        $this->banner->destroy($id);
        return back();        
    }
    
}