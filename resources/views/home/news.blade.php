@extends('layouts.app')

@section('content')
    <div class="about">
        <div class="about-title">
            @include('home.component.sidebar')
        </div>
        <div class="about-content">
            <div class="address">
                首页 > 新闻中心 > <span>{{ $title }}</span>
            </div>

            <div class="about-txt">
                {{-- 如果存在$newFirst对象，那么就执行下面的操作 --}}
                @if ($newFirst)
                <a href="{{ 'news/'.$newFirst->id }}" target="_blank">
                    <div class="new-detail">
                        <p>{{ $newFirst->title }}</p>
                        <div class="new-txt">{{ $newFirst->digest }}</div>
                    </div>
                </a>
                @endif
                <ul class="news-title" id="news-row">
                    @foreach ($news as $element)
                        <li><a href="{{'news/'.$element->id.'?cate_id='.$element->cate_id}}" target="_blank"><span class="time">{{ $element->publish_at->toDateString() }}</span>{{ $element->title }}</a></li>
                    @endforeach
              
                </ul>

                {{-- 只有新闻数据大于8条才能显示加载更多 --}}
                @if ($count > 8)
                    <p class="none" style="display: none; color: red; font-weight: bold;">抱歉没有更多了...</p>
                    <a class="more" href="javascript:;"></a>                
                @endif
               
            </div>
        </div>
    </div>
@endsection
@section('js')
<script type="text/javascript">
$(function() {
    var $news = $('#news-row'),
    html = "";
    // load点击加载更多数据条数
    function GetRequest() {
        //url例子：XXX.aspx?ID=" + ID + "&Name=" + Name；  
        var url = location.search; //获取url中"?"符以及其后的字串  
        var theRequest = new Object();
        if (url.indexOf("?") != -1) //url中存在问号，也就说有参数。  
        {
            var str = url.substr(1);
            strs = str.split("&");
            for (var i = 0; i < strs.length; i++) {
                theRequest[strs[i].split("=")[0]] = unescape(strs[i].split("=")[1]);
            }
        }
        return theRequest;
    }
    // 获取当前的参数
    var input = new GetRequest('cate_id'),
    cate_id = input.cate_id;
    var load = 5; //  一次加载5条
    // 点击加载更多
    $('.more').click(function() {
        // 现有数据长度
        var len = $news.children().length;
        $.ajax({
            type: 'GET',
            url: '/api/data/dataJson',
            dateType: 'json',
            // 传递数据，一次加载
            data: 'start=' + len + '&end=' + load + '&cate_id=' + cate_id,
            success: function(data) {
                // 如果Ajax取到了数据
                if (data.length > 0) {
                    myAjax(data);
                } else {
                    $('.none').show();
                }
            }
        });
    });
    // Ajax请求成功返回的代码
    function myAjax(data) {
        html = "";
        for (var i = 0; i < data.length; i++) {
            html += '<li><a href="/news/' + data[i].id + '" target="_blank"><span class="time">' + data[i].publish_at.substring(0, 10) + '</span>' + data[i].title + '</a></li>';
        }
        $news.append(html);
    }
})
</script>
@endsection

