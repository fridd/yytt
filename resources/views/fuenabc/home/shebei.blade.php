@extends('fuenabc.layouts.index')
@section('content')
  <div id="bd">
    <div id="ban-in" style="background-image:url(/skin/images/14415956107965.jpg)">
      <div class="ban-bg"></div>
    </div>
    <div class="wp">
      <div class="tit-i">
        <h3>校区环境</h3>
        <h5>v-ron <span>NEWS</span></h5>
      </div>
      <div class="sub-nav">
        <ul>
          <li><a href='{{asset('fuenabc/shebei')}}'  class='mycur'><span>环境设备</span></a></li>
          <li><a href='/a/kehuanli/yidongAPP/'>师资力量</a></li>

          <li><a href='{{asset('fuenabc/fenbu')}}'>校区分布</a></li>

          <li><a href='/a/kehuanli/kechengjieshao/'>课程介绍</a></li>

          <li><a href='/a/kehuanli/fuenketang/'>弗恩课堂</a></li>

        </ul>
      </div>
      <ul class="ul-list">
        <li>
          <div class="pad">
            <div class="pic"><a href="{{asset('fuenabc/xiangqing')}}"><img src="{{ asset('fuenabc/images/1-1G10GKZL01.jpg ') }}" alt="弗恩英语校区环境"></a></div>
            <div class="bor">
              <div class="txt">
                <div class="title"> <span><em>11/07</em>2017</span>
                  <h3><a href="{{asset('fuenabc/xiangqing')}}">弗恩英语校区环境</a></h3>
                </div>
                <a href="{{asset('fuenabc/xiangqing')}}" style="color:#666;">
                  <p>目前弗恩英语在合肥市区有十余家校区，覆盖合肥各个区域，满足广大家长的需求。弗恩英语成立于2013年,一...</p>
                </a> </div>
              <div class="more"><a href="/a/kehuanli/wangzhansheji/17.html" class="r">查看更多 ></a></div>
            </div>
          </div>
        </li>
      </ul>
      <div class="c"></div>
      <div class="dede_pages">
        <ul class="pagelist">
          <li><span class="pageinfo">共 <strong>1</strong>页<strong>1</strong>条记录</span></li>

        </ul>
      </div>
    </div>
  </div>
  <!-- end #bd -->
  <div class="c"></div>




@endsection