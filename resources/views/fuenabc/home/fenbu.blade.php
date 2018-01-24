@extends('fuenabc.layouts.index')
@section('content')
  <div id="bd">
    <div id="ban-in" style="background-image:url(/skin/images/14415956337556.jpg)">
      <div class="ban-bg"></div>
    </div>
    <div class="wp">
      <div class="tit-i">
        <h3>弗恩环境</h3>
        <h5><span>environment</span> OF v-ron</h5>
      </div>
      <div class="sub-nav">
        <ul>

          <li><a href='{{asset('fuenabc/shebei')}}'>环境设备</a></li>

          <li><a href='/a/kehuanli/yidongAPP/'>师资力量</a></li>
          <li><a href='{{asset('fuenabc/fenbu')}}'  class='mycur'><span>校区分布</span></a></li>
          <li><a href='/a/kehuanli/kechengjieshao/'>课程介绍</a></li>

          <li><a href='/a/kehuanli/fuenketang/'>弗恩课堂</a></li>

        </ul>
      </div>
      <div class="c"></div>
      <ul class="ul-case">
        <li>
          <div class="block">
            <div class="pic"><img src="{{ asset('fuenabc/images/1-1604211549540-L.jpg') }}" alt="弗恩英语校区分布"></div>
            <div class="txt"> <a href="{{asset('fuenabc/lianxiwomen')}}" style="width:100%;height:100%;display:block;"> <b></b>
                <div class="pad">
                  <h5>校区分布</h5>
                  <em></em>
                  <h3>弗恩英语校区分布</h3>
                  <span class="more">查看详情</span> </div>
              </a> </div>
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