@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-12">
        <div class="address" style="font-size: 1.8rem">
            首页 > 关于我们 > 國際考試及認證 > 證書查詢</span>
        </div>
    </div> 
</div>
    <div class="top-line" style="background:  rgb(143, 196, 62);"></div>
        <div class="col-md-12" style="width: 1319px;height: 342px;margin: 0 1%;background: url({{ asset('images/a-2.png')}}) no-repeat center center; background-size: 100%;padding: 0;">
            <!-- <img src="{{ asset('images/c-1.png') }}" alt="First slide"> -->
            <div class="about-title" style="margin-top: 19.2%;">
            <div class="a-title" style="width:14%;height: 50px;text-align:center;background: rgb(142,196,62);"><h3 style="margin: 0;line-height: 50px">國際考試及證書</h3></div>
            <div class="sid">
            <ul class="left-title">
                <li><a href="{{ asset(url('/dance'))}}">舞蹈</a></li>
                <li><a href="{{ asset(url('/test?pageurl=arts'))}}">美術</a></li>
                <li><a href="{{ asset(url('/test?pageurl=music'))}}">音樂</a></li>
                <li><a href="{{ asset(url('/enquiries'))}}">證書查詢</a></li>
                <li><a href="{{ asset(url('/dance'))}}">舞蹈證書說明</a></li>
            </ul>
            </div>
            </div>
        </div>
        <div class="col-md-12">
        	<div class="col-md-4 col-md-offset-4">
	        <form class="navbar-form navbar-left text-center" role="search">
			  	<dl>
			  		<dt><h3>證書查詢</h3></dt>
			  		<dt>姓名：<input type="text" class="form-control" placeholder="query"></dt>
			  		<dt>證書編號：<input type="text" class="form-control" placeholder="query"></dt>
			  		<dt>證書類型：<input type="text" class="form-control" placeholder="query"></dt>
			  	</dl>
			  <button type="submit" class="btn btn-default">Submit</button>
			</form>
		    </div>
		</div>
@endsection
