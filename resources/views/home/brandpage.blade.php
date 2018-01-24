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
				首页 > 旗下品牌 > <span>{{ $title }}</span>
			</div>
			<div class="about-txt">
				@if (count($brand)>0)
				<div class="mapCont">{!! $brand->content !!}</div>
					<div class="enter">
						<a href="{{ $brand->enterUrl }}" target="_blank">点击进入官网</a>
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