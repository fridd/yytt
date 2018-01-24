@extends('layouts.app')

@section('content')
<!-- 主体 -->
<div class="about-section">
	<div class="about">
		<div class="about-title">
			@include('home.component.sidebar')
		</div>
		<div class="about-content">
			<div class="address">
				首页 > 课程介绍 > <span>{{ $title }}</span>
			</div>
			<div class="about-txt">
				@if (count($maps)>0)
				<div class="mapCont">{!! $maps[0]->content !!}</div>
				<div class="city">
					<ul>
						{{-- 地图路由信息都在这个里面了，信息循环出来了 --}}
						@foreach ($maps as $map)
							<li><a class="{{ ($map->city == 1)?'active':'' }}" href="javascript:;" data-url="{{ $map->url }}" data-enter="{{ $map->enterUrl }}">
								{{-- 判断城市 --}}
  								@if ($map->city == 1)
                           			合肥
                        		@elseif($map->city == 2)
                           			南京
                        		@else
                           			杭州
                        		@endif								
							</a></li>
							<div class="mapContent" style="display: none">{!!$map->content!!}</div>
						@endforeach
					</ul>
				</div>
				{{--  默认载入第一条数据 --}}
					<iframe class="map" width="650" height="420" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="{{ $maps[0]->url }}" style="margin: 0 auto;"></iframe>
					<div class="enter">
						<a href="{{ $maps[0]->enterUrl }}" target="_blank">点击进入官网</a>
					</div>					
				@endif
			</div>
		</div>
	</div>
</div>
<div style="clear: both;"></div>
@endsection

@section('js')
<script>
	$(function(){

		//  地图处理
		var map = $('.map'),  // 地图
			clickCity = $('.city li a'),
			enter = $('.enter a');  // 进入官网

			clickCity.click(function(){
				// 点击选中效果
				$(this).addClass('active').parent('li').siblings().children('a').removeClass('active');
				map.attr('src', $(this).data('url'));
				enter.attr('href', $(this).data('enter'));

				$('.mapCont').html($(this).parent('li').next().html());

			});
	})
</script>
@endsection