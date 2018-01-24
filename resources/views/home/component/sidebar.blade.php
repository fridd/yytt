{{-- $path  当前路由文件地址 --}}
@if (isset($parent))
<div class="a-title">{{ $parent->title_en }}</div>
@endif
{{--  在这里进行操作选中效果 --}}
<ul class="left-title">
	{{-- 如果他有子栏目 --}}
	@if (count($child)>0)
		@foreach ($child as $key => $element)
			{{-- class 那边定义了选中效果 --}}
			<li class="
			{{-- 如果url有参数存在 --}}
			@if (isset($_SERVER["QUERY_STRING"]))
			{{--  当前页面路由和后台菜单进行匹配 --}}
				{{'/'.request()->segment(1).'?'.$_SERVER["QUERY_STRING"] == $element->url?'active':''}}
			@else
				{{--  否则就是从一级菜单点击进入的 --}}
				{{ $key == 0?'active':'' }}
			@endif "><a href="{{ $element->url }}">{{ $element->title }}</a><p></p></li>
		@endforeach		
	@endif
</ul>