<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\User;
use Illuminate\Support\Facades\Storage;

use App\Http\Requests\ArticleRules;
class ArticleController extends Controller
{
    /**
	 * 菜单模型
	 * @var [type]
	 */
	private $article;

	/**
	 * construct
	 * @param [type] $foo [description]
	 */
	public function __construct(Article $article)
	{
		$this->article = $article;
	}

	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $articles = $this->article->with('user');
        $cate_id = $request->get('cate_id');

        if ($cate_id == 1) {
            $title = '新闻管理---集团要闻';
        } elseif ($cate_id == 2) {
            $title = '新闻管理---行业新闻';
        } elseif ($cate_id == 3) {
            $title = '新闻管理---媒体新闻';
        } else {
            $title = '新闻管理';
        }
        
        // 获取对应的新闻类新闻
        if($request->get('search') !== null){
            $search = $request->get('search');
            $title = '搜索所有新闻';
            $articles = $articles
                ->where('title', 'like', '%'.$search.'%')
                ->orWhere('digest', 'like', '%'.$search.'%');
        }
        $articles = $articles
            ->where('cate_id', $cate_id)
            ->where('site_id', session('siteid'))
            ->orderBy('id', 'DESC')
            ->paginate(15);
        return view('admin.news.index', compact('title', 'articles', 'cate_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $cate_id = $request->get('cate_id');
        //  获取cateid
        if ($cate_id == 1) {
            $title = '添加新闻---集团要闻';
        } elseif ($cate_id == 2) {
            $title = '添加新闻---行业新闻';
        } elseif ($cate_id == 3){
            $title = '添加新闻---媒体新闻';
        } else {
            $title = '添加新闻';
        }
        return view('admin.news.form', compact('title', 'cate_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRules $request)
    {
        $all = $request->all();
        $v = '';
        foreach ($all['newsint'] as $key => $value) {
            $v .= strval($value) . ',';
        }
        $all['newsint'] = $v;
        $result = $this->article->create($all);
        if ($result) {
            return response()->json(['message' => '添加文章成功。'], 201);
        }
        return response()->json(['message' => '添加文章失败。'], 400);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //查看新闻内容
        // 输出新闻内容
        $article = $this->article->find($id); 
        // 增加查看次数
        $article->view += 1;
        $article->save();
        $seo_key = $article->seo_key;
        $seo_title = $article->seo_title;
        $seo_description = $article->seo_description;         
        return view('home.news-show', compact('article', 'seo_key', 'seo_title', 'seo_description'));

        
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $model = $this->article->find($id);
        $model->arrnew = explode(';', $model->newimg);

        return view('admin.news.form', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRules $request, $id)
    {
        $all = $request->all();
        $v = '';
        foreach ($all['newsint'] as $key => $value) {
            $v .= strval($value) . ',';
        }
        $all['newsint'] = $v;
        // $newsint = explode(';', $all['newsint']);


        // return response(['message' => $all['newsint']], 201);
        $result = $this->article->find($id)->update($all);

        if ($result) {
            return response()->json(['message' => '修改文章成功。'], 201);
        }

        return response()->json(['message' => '修改文章失败。'], 400);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->article->find($id)->delete();
        return back();
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file'); // 获取上传的文件
            // 获取文件相关信息
            $originalName = $file->getClientOriginalName(); // 文件原名
            $ext = $file->getClientOriginalExtension();     // 扩展名
            $realPath = $file->getRealPath();   //临时文件的绝对路径
            $filename =  uniqid() . '.' . $ext;  // 重新生成文件名称
            Storage::disk('newsimage')->put($filename, file_get_contents($realPath));  // 文件名称 ， 内容
            return response(['message' => '上传成功', 'url' => '/uploads/news/'.$filename], 201);
        } else {
            return response(['message' => '请重新上传'], 400);
        }
    }
}
