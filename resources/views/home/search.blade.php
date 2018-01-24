@extends('layouts.app')

@section('content')

{{-- 搜索结果页面 --}}
<div class="search-banner"></div>
<div class="search">
	<div class="search-address">搜索结果</div>
	<div class="search-message">
		<p>您输入的关键词为：<span id="searchKey" style="color: red;">{{ $search }}</span></p>
		<p>搜索结果如下</p>
	</div>
	@if (count($values)>0)
	<ul class="search-ul" id="searchUl">
	@foreach ($values as $element)
		<li>
			<a href="{{ url('news', $element->id) }}" target="_blank">
				<p>{{ $element->title }}</p>
				所属栏目 > <span>{{ $element->type }}</span>
			</a>
		</li>		
	@endforeach
	</ul>
		{{-- 在这里判断搜索到的结果长度是否大于8 --}}
		@if ($count > 8)
			<p class="none" style="display: none; color: red; font-weight: bold;">抱歉没有更多了...</p>
			<a href="javascript:;" id="more" class="search-more"></a>		
		@endif
	@else
		<div class="no-avail">没有搜索到任何结果......</div>
	@endif	
</div>
@endsection

@section('js')
<script type="text/javascript">
	$(function(){
		var $news = $('#searchUl'),
			$key = $('#searchKey'),
	    	html = "",
	    	search = $key.text(),
	    	load = 5;
	    // 点击加载更多
	    $('#more').click(function() {
	        // 现有数据长度
	        var len = $news.children().length;
	        $.ajax({
	            type: 'GET',
	            url: '/api/data/searchNew',
	            dateType: 'json',
	            // 传递数据，一次加载
	            data: 'start=' + len + '&end=' + load + '&search=' + search,
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
	            html += '<li><a href="/news/' + data[i].id + '"target="_blank"><p>' + data[i].title + '</p>所属栏目 > <span>' + data[i].type + '</span></a></li>';
	        }
	        $news.append(html);
	    }		
	})
</script>
@endsection