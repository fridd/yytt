@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-12">
         <div class="address" style="font-size: 1.8rem">
                首页 > 关于我们 > <span>{{ $title }}</span>
            </div>
        </div>   
       <!--  <div class="about-title" style="margin-top: 10px">
            @include('home.component.sidebar')
        </div> -->
    </div>        
    <div class="col-md-12" style="width: 1319px;height: 342px;margin: 0 1%;background: url({{ asset('images/a-2.png')}}) no-repeat center center; background-size: 100%;padding: 0;">
        <!-- <img src="{{ asset('images/a-2.png') }}" alt="First slide" style="max-width: 100%;"> -->
        <div class="about-title" style="margin-top: 19.2%;">
        @include('home.component.sidebar')
        </div>
    </div>
    
    <div class="col-md-12" style="margin-top: 18px">
        <div class="col-md-9" style="background-color: rgb(143, 196, 62);">
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
<!-- 
            <p style="font-size: 18px;"> 每個人都需要教育帶來及競爭力的肯定，藝術學習者同時也需要對藝術學習充滿信心。考試和證書不是目的，而是幫助藝術學習者建立自信、自我檢測的一種方式，我們長遠的目標是透過藝術教育帶來更美好的生活。</p> -->
        
        <div class="col-md-3">
            <img src="{{ asset('images/a-1.png') }}" alt="" style="max-width: 100%;">
        </div>
        </div>
    </div>
</div>
@endsection