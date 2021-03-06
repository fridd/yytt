@extends('admin.group')

@section('content')
    <div style="padding: 15px;">
        <blockquote class="layui-elem-quote">
            <div style="float: right;">
                <a href="{{ url('admin/news/create?cate_id='.$cate_id) }}" class="layui-btn layui-btn-small">添加文章</a>
            </div>
            {{ $title }}
        </blockquote>
        <form class="layui-form" style="float: left;" action="{{ url('/admin/news') }}" method="GET">
            <div class="layui-form-item" style="margin: 0 0 10px 0;">
                <label class="layui-form-label">信息查询：</label>
                <div class="layui-input-inline">
                    <input type="hidden" name="cate_id" value="{{$cate_id}}">
                    <input type="text" name="search" placeholder="支持模糊查询.." autocomplete="off" class="layui-input">
                </div>
                <button lay-filter="search" class="layui-btn layui-btn-small" lay-submit="" style="margin-top: 4px;">
                    <i class="fa fa-search" aria-hidden="true"></i> 查询
                </button>
            </div>
        </form>
        <table class="layui-table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>标题</th>
                    <th>摘要</th>
                    <th>状态</th>
                    <th>作者</th>
                    <th>发布时间</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                <tr>
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->title }}</td>
                    <td class="digest">{{ $article->digest }}</td>
                    <td>
                        {{ $article->status == 0?'隐藏':'显示' }}
                    </td>
                    <td>{{ $article->user->name }}</td>
                    <td>{{ substr($article->publish_at, 0, 10) }}</td>
                    <td>
                        <a href="{{ url('/admin/news/'.$article->id.'/edit') }}" class="layui-btn layui-btn-small">编辑</a>
                        @if(session('siteid') == 1)
                        <a href="{{ url('/news/'.$article->id) }}" target="_blank" class="layui-btn layui-btn-small layui-btn-primary layuiBtn">查看</a>
                        @else
                        <a href="{{ url('/power/news13/?id='.$article->id) }}" target="_blank" class="layui-btn layui-btn-small layui-btn-primary layuiBtn">查看</a>
                        @endif
                        <a href="javascript:;" onclick="event.preventDefault();document.getElementById('destroy-news{{ $article->id }}-form').submit();" class="layui-btn layui-btn-danger layui-btn-small">删除</a>               
                        {!! Form::open(['route' => ['news.destroy', $article->id], 'id' => 'destroy-news'.$article->id.'-form', 'method' => 'DELETE', 'style' => 'display: none;']) !!}
                        {!! Form::close() !!}                        
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div id="pages" style="margin: 0 auto; text-align: center;">{{ $articles->links() }}</div>
        <div id="myInfo" style="display: none"></div>        
    </div>
@endsection
