@extends('layouts.app')

@section('content')
<!-- banner -->
<div class="banner">
    <ul id="myBanner">
        @foreach ($banners as $banner)
        <li style="background: url({{ asset($banner->thumb) }}) no-repeat center center; background-size: cover;"><a href="{{ $banner->url }}" target={{ $banner->blank == 1 ? "_blank": "" }}></a></li>
        @endforeach
    </ul>
    
    <div class="cur"></div>
    <div class="click-banner">
        <i class="prev"></i>
        <i class="next"></i>
    </div>    
</div>

<div class="section" style="margin-bottom: 5px">
    <!-- logo集 -->
    <div class="logo-group">
        <ul>
            <li class="yzyx"><a href="{{ url('brand?category=yzyx') }}" style="background: url('images/yzyx_03.png') no-repeat center center" target="_blank"></a></li>
            <li class="feyy"><a href="{{ url('brand?category=feyy') }}" style="background: url('images/feyy_03.png') no-repeat center center" target="_blank"></a></li>
            <li class="pwe"><a href="{{ url('brand?category=pwr') }}" style="background: url('images/pwe_03.png') no-repeat center center" target="_blank"></a></li>
            <li class="yzyx" style="margin-top: 8px"><a href="{{ url('brand?category=kelesi') }}" style="background: url('images/kls3.png') no-repeat center center" target="_blank"></a></li>
            <li class="feyy" style="margin-top: 8px"><a href="http://www.yktyx.cn/" style="background: url('images/ykt1.png') no-repeat center center" target="_blank"></a></li>
            <li class="pwe" style="margin-top: 8px"><a href="http://shop.chinayzyx.com/" style="background: url('images/shop2.png') no-repeat center center" target="_blank"></a></li>
           
        </ul>   
    </div>
    <!-- 新闻 -->
        <div class="new-group">
            <div class="n-title">
                <div>
                    <a href="javascript:;" class="active">集团要闻</a>
                    <a href="javascript:;">行业新闻</a>
                    <a href="javascript:;">媒体报道</a>
                </div>
            </div>
           
            <div class="n-content">
                @if (!empty($arrindexnew1))
                <h1>{{ $arrindexnew1->title }}</h1>
                <div class="n-text">{{ str_limit($arrindexnew1->digest, $limit=100, $end='...') }}<a href="{{ url('news/'.$arrindexnew1->id) }}" target="_blank">详细内容</a></div>
                @endif
            </div>

            <div class="n-content">
                @if (!empty($arrindexnew2))
                <h1>{{ $arrindexnew2->title }}</h1>
                <div class="n-text">{{ str_limit($arrindexnew2->digest, $limit=100, $end='...') }}<a href="{{ url('news/'.$arrindexnew2->id) }}" target="_blank">详细内容</a></div>
                @endif
            </div>

            <div class="n-content">
                @if (!empty($arrindexnew3))
                <h1>{{ $arrindexnew3->title }}</h1>
                <div class="n-text">{{ str_limit($arrindexnew3->digest, $limit=100, $end='...') }}<a href="{{ url('news/'.$arrindexnew3->id) }}" target="_blank">详细内容</a></div>
                @endif 
            </div>
        </div>    
</div>
</div>
@endsection
@section('js')
<script src="{{ asset('libs/banner/banner.js') }}"></script>
@endsection
