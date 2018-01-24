<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=1, minimum-scale=1.0, maximum-scale=2.0">
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <title>{{ config('app.name') }}</title>
    {!! Html::style('libs/wechat/seat/style.css') !!}
    @yield('css')
</head>
<body>
    <div id="g-wp" class="g-wp">
        <div id="header">
            <h1 class="logo">
                <a href="#" title="#">
                    <img src="{{ asset('images/wechat/148480525567187600.jpg') }}" >
                </a>
            </h1>
        </div>

        @yield('content')

        <div class="footer">
            @foreach ($seatCopys as $key => $copy)
            <p style="text-align:left;"><span>{{ $key === 0 ? '咨询电话：' . $copy->contact : $copy->contact }}</span></p>
            @endforeach
            <p style="text-align:left;"><span>剧院地址：怀宁路与龙图路交口安徽担保大厦2层</span></p>
            <p style="text-align:left;"><span>温馨提示：每位家长只能选择一次，每次最多选择2个座位</span></p>
        </div>
    </div>
    {!! Html::script('js/jquery2.1.1.min.js') !!}
    @yield('js')
</body>
</html>
