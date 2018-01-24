@extends('fuenabc.layouts.index')
@section('content')
  <div id="bd">
    <div class="cur">
      <div class="wp">您的当前位置：<a href='http://www.fuenabc.com/'>首页</a> > <a href='/a/kehuanli/'>校区环境</a> > <a href='/a/kehuanli/ruanjianjiemian/'>校区分布</a> >  </div>
    </div>
    <div class="case-article">
      <div class="case-article-bg">
        <div class="wp pr">
          <div class="case-logo"><!--<img src="/skin/images/14429937758428.png" alt="14429937758428.png">--></div>
          <h1 style="color:#000000">弗恩英语校区分布</h1>
          <div class="tc"> <iframe frameborder="0" height="578" marginheight="0" marginwidth="0" scrolling="no" src="http://www.ahyzyx.com/ditu/fuen.html" width="958"></iframe><br />
            <br />
            <ul class="ul-contact" style="box-sizing: border-box; margin: 0px; padding-right: 0px; padding-left: 0px; list-style: none; color: rgb(0, 0, 0); font-family: 微软雅黑, 'Microsoft Yahei'; line-height: 18px;">
              <li class="li1" style="box-sizing: border-box; margin: 0px 0px 20px; padding: 0px 0px 0px 60px; font-size: 14px; line-height: 35px; background: url(&quot;{{ asset('fuenabc/images/i_icon2.png') }}&quot;) 0px 0px no-repeat;">
                安徽总部地址：合肥市经开区芙蓉路650号</li>
              <li class="li2" style="box-sizing: border-box; margin: 0px 0px 20px; padding: 0px 0px 0px 60px; font-size: 14px; line-height: 35px; background: url(&quot;{{ asset('fuenabc/images/i_icon2.png') }}&quot;) 0px -74px no-repeat;">
                合肥咨询电话：<a href="tel:0551-66667773" style="box-sizing: border-box; text-decoration: none; color: rgb(51, 51, 51);">0551-66667773&nbsp;</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="case-back"><a href="{{ asset('fuenabc/fenbu') }}">返回列表</a></div>
    </div>
  </div>
  <!-- end #bd -->
  <div class="c"></div>


@endsection