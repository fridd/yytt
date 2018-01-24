<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Site;


class SiteController extends Controller
{

    public function __construct(Site $site)
    {
        $this->site = $site;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sites = $this->site->oldest('id')->paginate(10);


        return view('admin.site.index', compact('sites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.site.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $all = $request->all();
        $result = $this->site->create($all);

        if ($result) {
            return response(['message' => '添加站点成功'], 201);
        }
        return response(['message' => '添加站点失败'], 400);
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
        $model = $this->site->find($id);
        return view('admin.site.form', compact('model'));
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
        $result = $this->site->find($id)->update($all);
        if ($result) {
            return response(['message' => '编辑站点成功'], 201);
        }
        return response(['message' => '编辑站点失败'], 400);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = $this->site->destroy($id);
        if ($result) {
            return response(['message' => '删除站点成功'], 201);
        }
        return response(['message' => '删除站点失败'], 400);
    }
}
