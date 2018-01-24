@extends('layouts.app')

@section('content')
    <div class="about">
        <div class="about-title">
            @include('home.component.sidebar')
        </div>
        <div class="about-content">
            <div class="address">
                首页 > <span>新闻中心</span>
            </div>
            <div class="about-txt">
                <div class="new-title">
                    {{$article->title}}
                </div>
                <div class="new-time">发布时间：<span class="newTime">{{$article->publish_at->toDateString()}}</span> 内容来源：<span class="copy">{{ isset($article->source)?$article->source:'安徽艺朝艺夕教育咨询有限公司'}}</span></div>
                
                {!!$article->content!!}
            </div>
        </div>
    </div>
@endsection
