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
				首页 > 联系我们 > <span>{{ $title }}</span>
			</div>
			<div class="about-txt">
				<div class="touchus">
					<div class="t-type active">艺朝艺夕</div>
					<div class="t-type">弗恩英语</div>
					<div class="t-type">跑沃尔</div>
				</div>
				{{-- 就放一张图片 --}}
				<div class="t-img active">
					<img src="{{ asset('images/yishu.jpg?v='.time()) }}">
					<p style="color:red; font-size: 20px; text-align: left; line-height: 35px; width: 100%;">总部地址：安徽省合肥市芙蓉路650号安徽艺朝艺夕教育咨询有限公司</p>
				</div>
				<div class="t-img">
					<img src="{{ asset('images/fuen.jpg?v='.time()) }}">
				</div>
				<div class="t-img">
					<img src="{{ asset('images/pwe.jpg?v='.time()) }}">
				</div>
			</div>
		</div>
	</div>
</div>
<div style="clear: both;"></div>
@endsection

@section('js')
<script>
	$(function(){
		$touchus = $('.touchus');
		$touchus.children().click(function(){
			$(this).addClass('active').siblings().removeClass('active');
			$('.t-img').eq($(this).index()).addClass('active').siblings('.t-img').removeClass('active');
		})				
	})
	
</script>
@endsection
