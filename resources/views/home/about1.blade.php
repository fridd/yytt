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
                首页 > 关于我们 > <span>{{ $title }}</span>
            </div>
            {{--  在这里做判断  develop --}}
            
            {{-- <div class="{{ $parameter == 'pageurl=history'?'develop':'about-txt'}}"> --}}
            <div class="about-txt">
            @if (isset($page))
                {!! $page->content !!}
            @else
                {{ $js }}
            @endif
                
            </div>
        </div>
    </div>
</div>
<div style="clear: both;"></div>
@endsection