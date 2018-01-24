<?php

namespace App\Http\Controllers\Wechat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Wechat\SeatActivity as Activity;

class SeatActivityController extends Controller
{
    /**
     * 活动
     * @var [type]
     */
    private $activity;

    /**
     * 构造函数
     * @param Activity $activity 活动模型
     */
    public function __construct(Activity $activity)
    {
        $this->activity = $activity;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activities = $this->activity->oldest('sort')->paginate(15);
        return view('admin.wechat.seat.activity.index', compact('activities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = '添加选座活动';
        return view('admin.wechat.seat.activity.form', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $result = $this->activity->create($request->all());

        if ($result) {
            return response()->json(['message' => '添加选座活动成功。'], 201);
        }

        return response()->json(['message' => '添加选座活动失败。'], 400);
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
        $title = '修改选座活动';
        $activity = $this->activity->find($id);
        return view('admin.wechat.seat.activity.form', compact('title', 'activity'));
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
        $result = $this->activity->find($id)->update($request->all());

        if ($result) {
            return response()->json(['message' => '修改选座活动成功。'], 201);
        }

        return response()->json(['message' => '修改选座活动失败。'], 400);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
