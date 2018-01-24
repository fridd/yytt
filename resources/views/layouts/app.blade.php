<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- seo关键字 --}}
	<meta namespace="keywords" content="{{ $seo_key or $site['WEB_SITE_KEYWORD'] }}" />
    <meta namespace="description" content="{{ $seo_description or $site['WEB_SITE_DESCRIPTION'] }}" />
    <title>{{ isset($seo_title)?$seo_title.'-':'' }}{{ $site['WEB_SITE_TITLE'] }}</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="icon" type="image/x-icon" href="{{ asset('images/yzyx.ico') }}">
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/yzyx.ico') }}"/>
	{{-- jquery.min.js --}}
	<script src="{{ asset('js/jquery2.1.1.min.js') }}"></script>
    <!-- Styles -->
    @if (env('APP_DEBUG') == true)
    <link href="{{ asset('css/style.css?v='.time()) }}" rel="stylesheet">
    @else
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @endif
    @yield('css')
    <style type="text/css">
        
    </style>
</head>
<body>
    <!-- 头部 -->
	<div class="header">
		<div class="head">
			<div class="logo">
                <a href="{{ url('/') }}">
                	{{-- 如果没有上传logo配置数据，那么就默认本地的--}}
                    <img src="{{ isset($logo->image)?url($logo->image):asset('images/logo.png') }}" title="{{ isset($logo->name)? $logo->name: '安徽艺朝艺夕教育咨询有限公司
					' }}" alt="{{ isset($logo->description)?$logo->description:'安徽艺朝艺夕教育有限公司' }}">
                </a>
            </div>
			{{-- 语言 --}}
			<div class="lang">
				<span></span>
				<a href="javascript:;"><img src="{{ asset('images/langen_03.png') }}"><img src="{{ asset('images/langen-on_03.png') }}"></a>
				<a href="javascript:;"><img src="{{ asset('images/langft_03.png') }}"><img src="{{ asset('images/langft-on_03.png') }}"></a> 
				<a class="active" href="javascript:;"><img src="{{ asset('images/langjt_03.png') }}"><img src="{{ asset('images/langjt-on_03.png') }}"></a>
			</div>
		</div>
	</div>
	<!-- nav -->
	<div class="nav">
		<ul>
			{{--服务里面共享数据 --}}
            @foreach ($channels as $channel)
            <li>
                @if ($channel->url === '/')
                <a class="{{ url()->current() == url($channel->url) ? 'active' : '' }}" href="{{ url($channel->url) }}">{{ $channel->title }}</a>
                @else
                <a class="{{ '/'.request()->segment(1) === $channel->url ? 'active' : '' }}" href="{{ url($channel->url) }}">{{ $channel->title }}</a>
                @endif
            </li>
            @endforeach

			<li>
				<div class="form">
					<form id="myForm" action="{{ url('/index/search') }}" method="POST" >
						{!! csrf_field() !!}						
						<input class="txt" type="text" name="search" placeholder="请输入关键字..." autocomplete="off">
						<button type="button" class="sub"></button>
					</form>
				</div>
			</li>
		</ul>
	</div>
	<div class="top-line"></div>
    @yield('content')
	<!-- 底部 -->
	<div class="container-fluid footer">
        <div style="width:1349px;margin: 0 auto">
		<div class="line">
			<div class="line-bg"></div>
		</div>
        <div class="row links">
            @foreach ($channels as $channel)
            	<ul>
            		
                    <li><h4>{{ $channel->title }}</h4></li>
                    @foreach($channel->child as $item)
                    <li><a href="{{ $item->url }}">{{$item->title}}</a></li>
                    @endforeach
                    
                </ul>
            @endforeach
            	<ul>
            		<li><h4>联系我们</h4></li>
            		<li><a href="http://www.yzyxgroup.com:8030/contact?cate=touchus">艺朝艺夕</a></li>
            		<li><a href="http://www.yzyxgroup.com:8030/contact?cate=touchus">弗恩英语</a></li>
            		<li><a href="http://www.yzyxgroup.com:8030/contact?cate=touchus">跑沃尔</a></li>
            		<li><a href="http://www.yzyxgroup.com:8030/contact?cate=messages">投诉建议</a></li>
            	</ul>
            	<ul>
            		<li><h4>艺朝艺夕</h4></li>
            		<li><a href="http://www.yzyxgroup.com:8030/brand?category=yzyx">创意美术</a></li>
            		<li><a href="http://www.yzyxgroup.com:8030/brand?category=yzyx">中国舞</a></li>
            		<li><a href="http://www.yzyxgroup.com:8030/brand?category=yzyx">拉丁舞</a></li>
            		<li><a href="http://www.yzyxgroup.com:8030/brand?category=yzyx">街舞</a></li>
            		<li><a href="http://www.yzyxgroup.com:8030/brand?category=yzyx">钢琴</a></li>
            		<li><a href="http://www.yzyxgroup.com:8030/brand?category=yzyx">电子键盘</a></li>
            	</ul>
            	<ul>
            		<li><h4>弗恩英语</h4></li>
            		<li><a href="http://www.yzyxgroup.com:8030/brand?category=feyy">幼儿阶段</a></li>
            		<li><a href="http://www.yzyxgroup.com:8030/brand?category=feyy">幼小衔接</a></li>
            		<li><a href="http://www.yzyxgroup.com:8030/brand?category=feyy">少儿阶段</a></li>
            		<li><a href="http://www.yzyxgroup.com:8030/brand?category=feyy">青少儿阶段</a></li>
            	</ul>
            	<ul>
            		<li><h4>跑沃尔</h4></li>
            		<li><a href="http://www.yzyxgroup.com:8030/brand?category=pwr">基础体能</a></li>
            		<li><a href="http://www.yzyxgroup.com:8030/brand?category=pwr">跆拳道</a></li>
            		<li><a href="http://www.yzyxgroup.com:8030/brand?category=pwr">旱地冰球</a></li>
            	</ul>
        </div>
        </div> 
   </div>
   <div class="row declare" style="height: 50px;line-height: 50px;background-color: #f9eac6">
                 <p style="position: absolute;left: 10%">{{ isset($site['WEB_SITE_ICP'])?$site['WEB_SITE_ICP']:''}}</p>
			<ul>
				<li style="margin-left: 24%"><a href="javascript:;">法律申明</a></li>
				<li><a href="javascript:;">网站地图</a></li>
				<li><a href="http://mail.ahyzyx.cn" target="_blank">邮箱登录</a></li>
				<li><a href="{{ url('/contact') }}">联系我们</a></li>
				<li><a href="javascript:;">技术支持</a></li>
			</ul>
			<p class="copy" style="position: absolute;right: 7%">安徽艺朝艺夕教育咨询有限公司&copy;版权所有 THE ART LIFE EDUCATION GROUP</p>
      </div>
 <!-- Scripts  -->
    @if (env('APP_DEBUG') == true)
    <script src="{{ asset('js/app.js?v='.time()) }}"></script>
	<script src="{{ asset('js/index.js?v='.time()) }}"></script>
    @else
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/index.js') }}"></script>
    @endif
	@yield('js')
</body>
</html>
