<!doctype html>  
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<html class="no-js" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
<title>跑沃尔丨训练</title>
<meta name="description" content="Road, Track, Fixed Gear Freestyle and Time Trial Frames. Sold worldwide. Wholesale bike frames, forks and parts to dealers worldwide through our US Distro warehouse and also through our international distribution. Please visit our website at www.leaderbikeusa.com for contact and more information." />
<meta name="keywords" content="Road, Track, Fixed Gear Freestyle, Time Trial, Bike Frames, Bikes" />
<meta name="robots" content="INDEX,FOLLOW" />
<link rel="icon" href="http://www.paowoer.com/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="http://www.paowoer.com/favicon.ico" type="image/x-icon" />
<!--[if lt IE 7]>
<script type="text/javascript">
//<![CDATA[
    var BLANK_URL = 'https://leaderbikes.com/js/blank.html';
    var BLANK_IMG = 'https://leaderbikes.com/js/spacer.gif';
//]]>
</script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="{{ asset('paowoer/css/b7388d1d82b5b393360b3a7c8ed83491.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('paowoer/css/cb8cbbef5c464fcc6fc20b7c650ea011.css') }}" media="all">
<link rel="stylesheet" type="text/css" href="{{ asset('paowoer/css/0055e39fc249207ad3a782b31329cdfb.css') }}"  media="all" />
<link rel="icon" href="http://www.paowoer.com/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="http://www.paowoer.com/favicon.ico" type="image/x-icon" />
<script type="text/javascript" src="{{ asset('paowoer/js/d182702fa0aa2495ff0945ab193906e0.js') }}" ></script>
<script type="text/javascript" src="{{ asset('paowoer/js/c1c9a8476d0bdf4598a97f62c339e08b.js') }}"  fcy></script>
<!--[if lt IE 8]>
<link rel="stylesheet" type="text/css" href="../home/leaderbikes/public_html/skin/frontend/base/default/css/styles-ie.css"  media="all" />
<![endif]-->
<!--[if lt IE 7]>
<script type="text/javascript" src="../media/js/e4b1125686173cd87732de8a33c2b4d7.js" ></script>
<![endif]-->

<script type="text/javascript">
//<![CDATA[
Mage.Cookies.path     = '/';
Mage.Cookies.domain   = 'https://leaderbikes.com/team/.leaderbikes.com';
//]]>
</script>

<script type="text/javascript">
//<![CDATA[
optionalZipCountries = ["HK","IE","MO","PA"];
//]]>
</script>
    <!--Aromicon Google Universal Analytics Section start -->
    <script type="text/javascript">
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-68636679-1', 'https://leaderbikes.com/team/leaderbikes.com');
        ga('set', 'anonymizeIp', false);
                                                        ga('send', 'pageview');
                    </script>
        <!--Aromicon Google Universal Analytics Section end -->
<script type="text/javascript">//<![CDATA[
        var Translator = new Translate([]);
        //]]></script><script type="text/javascript">
	var $j = jQuery.noConflict();
</script>
<script type="text/javascript">
	adroll_adv_id = "UIF3N74R3ZBNDDIOJ4HGRE";
	adroll_pix_id = "Z4JLEYBXGFDARGG2ZIN43U";
	(function () {
	var oldonload = window.onload;
	window.onload = function(){
	   __adroll_loaded=true;
	   var scr = document.createElement("script");
	   var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com/");
	   scr.setAttribute("async", "true");
	   scr.type = "text/javascript";
	   scr.src = host + "/j/roundtrip.js";
	   ((document.getElementsByTagName("head") || [null])[0] ||
		document.getElementsByTagName("script")[0].parentNode).appendChild(scr);
	   if(oldonload){oldonload()}};
	}());
</script>
<style type="text/css">
<!--
.STYLE1 {font-size: 10px}
-->
</style>
</head>
<body class=" contentmanager-index-view contentmanager-contenttype-team contentmanager-content-368">
<div class="wrapper">
        <noscript>
        <div class="global-site-notice noscript">
            <div class="notice-inner">
                <p>
                    <strong>JavaScript seems to be disabled in your browser.</strong><br />
                    You must have JavaScript enabled in your browser to utilize the functionality of this website.                </p>
            </div>
        </div>
    </noscript>
    <div class="page">
        


<header class="h bg-black">
            <div class="h__w">
                <div class="grid">
                    <div class="col span-4 small-12 xsmall-6">
                        <h1 class="h__logo">
                            <a href="{{ asset('power/index') }}"  title="Leader Bikes">
                                <img src="{{ asset('paowoer/images/logo.png') }}"  alt="Leader Bikes" />
                            </a>
                        </h1>
                    </div>
                    <div class="col span-8 small-12 xsmall-6">
          <div class="h__r">
            <nav class="h__nv hide-xsmall">
              <ul>
                @foreach ($channels2 as $channel)
                <li>
                    @if ($channel->url === '/')
                    <a class="{{ url()->current() == url($channel->url) ? 'active' : '' }}" href="{{ url($channel->url) }}"><strong><{{ $channel->title }}</strong></a>
                    @elseif($channel->id != '51')
                    <a class="{{ '/'.request()->segment(1) === $channel->url ? 'active' : '' }}" href="{{ url($channel->url) }}"><strong>{{ $channel->title }}</strong></a>
                    @endif
                </li>
                @endforeach
                <!-- <li><strong><a href="{{ url('power/paowoer') }}">PAOWOER</a></strong>
                </li><li><a href="{{ url('power/class') }}"><strong>课程介绍</strong></a>
                </li><li><a href="{{ url('power/tuandui') }}"><strong>TEAM</strong></a>
                </li><li><a href="{{ url('power/changjianwenti') }}"><strong>常见问题</strong></a>
                </li><li><a href="{{ url('power/news') }}"><strong>NEWS</strong></a>
                </li><li><a href="{{ url('power/contact') }}"><strong>联系我们</strong></a>
                </li> -->
              </ul>
            </nav>
            <nav class="h__nv show-xsmall">
              <button class="button js-drop" type="button" data-drop="#h__nv--xsmall"><span class="sr-only">Search</span></button>
              <ul class="drop drop--down" id="h__nv--xsmall" data-drop-menu="">
                @foreach ($channels2 as $channel)
                <li>
                    @if ($channel->url === '/')
                    <a class="{{ url()->current() == url($channel->url) ? 'active' : '' }}" href="{{ url($channel->url) }}"><strong>{{ $channel->title }}</strong></a>
                    @else
                    <a class="{{ '/'.request()->segment(1) === $channel->url ? 'active' : '' }}" href="{{ url($channel->url) }}"><strong>{{ $channel->title }}</strong></a>
                    @endif
                </li>
                @endforeach
                <!-- <li><strong><a href="{{ url('power/paowoer') }}">PAOWOER</a></strong>
                </li><li><a href="{{ url('power/class') }}"><strong>课程介绍</strong></a>
                </li><li><a href="{{ url('power/tuandui') }}"><strong>TEAM</strong></a>
                </li><li><a href="{{ url('power/changjianwenti') }}"><strong>常见问题</strong></a>
                </li><li><a href="{{ url('power/news') }}"><strong>NEWS</strong></a>
                </li><li><a href="{{ url('power/contact') }}"><strong>联系我们</strong></a>
                </li> -->
              </ul>
          </div>
       </div>

                    
            </div>
        </header>

        <div class="main-container col1-layout">
            <div class="main">
                <div class="col-main">
                                        
<script type="text/javascript">
//<![CDATA[
enUS = {"m":{"wide":["January","February","March","April","May","June","July","August","September","October","November","December"],"abbr":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"]}}; // en_US locale reference
Calendar._DN = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"]; // full day names
Calendar._SDN = ["Sun","Mon","Tue","Wed","Thu","Fri","Sat"]; // short day names
Calendar._FD = 0; // First day of the week. "0" means display Sunday first, "1" means display Monday first, etc.
Calendar._MN = ["January","February","March","April","May","June","July","August","September","October","November","December"]; // full month names
Calendar._SMN = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"]; // short month names
Calendar._am = "AM"; // am/pm
Calendar._pm = "PM";

// tooltips
Calendar._TT = {};
Calendar._TT["INFO"] = 'About the calendar';

Calendar._TT["ABOUT"] =
'DHTML Date/Time Selector\n' +
"(c) dynarch.com 2002-2005 / Author: Mihai Bazon\n" +
'For latest version visit: http://www.dynarch.com/projects/calendar/\n' +
'Distributed under GNU LGPL. See http://gnu.org/licenses/lgpl.html for details.' +
'\n\n' +
'Date selection:\n' +
'- Use the \xab, \xbb buttons to select year\n' +
'- Use the \u2039 buttons to select month\n' +
'- Hold mouse button on any of the above buttons for faster selection.';
Calendar._TT["ABOUT_TIME"] = '\n\n' +
'Time selection:\n' +
'- Click on any of the time parts to increase it\n' +
'- or Shift-click to decrease it\n' +
'- or click and drag for faster selection.';

Calendar._TT["PREV_YEAR"] = 'Prev. year (hold for menu)';
Calendar._TT["PREV_MONTH"] = 'Prev. month (hold for menu)';
Calendar._TT["GO_TODAY"] = 'Go Today';
Calendar._TT["NEXT_MONTH"] = 'Next month (hold for menu)';
Calendar._TT["NEXT_YEAR"] = 'Next year (hold for menu)';
Calendar._TT["SEL_DATE"] = 'Select date';
Calendar._TT["DRAG_TO_MOVE"] = 'Drag to move';
Calendar._TT["PART_TODAY"] = ' (' + "today" + ')';

// the following is to inform that "%s" is to be the first day of week
Calendar._TT["DAY_FIRST"] = 'Display %s first';

// This may be locale-dependent. It specifies the week-end days, as an array
// of comma-separated numbers. The numbers are from 0 to 6: 0 means Sunday, 1
// means Monday, etc.
Calendar._TT["WEEKEND"] = "0,6";

Calendar._TT["CLOSE"] = 'Close';
Calendar._TT["TODAY"] = "today";
Calendar._TT["TIME_PART"] = '(Shift-)Click or drag to change value';

// date formats
Calendar._TT["DEF_DATE_FORMAT"] = "%b %e, %Y";
Calendar._TT["TT_DATE_FORMAT"] = "%B %e, %Y";

Calendar._TT["WK"] = "Week";
Calendar._TT["TIME"] = 'Time:';
//]]>
</script>
<!-- <div class="m page">
    <script type="text/javascript" src="{{ asset('paowoer/js/header2.js') }}"></script>
    </div> -->
    <div class="page__nv">
    <div class="page__nv__w">
        <h4 class="subnav-parent">
            <a href="/power/paowoer">Paowoer</a></h4>
        <div id="subnav" class="hide-xsmall">
          <div class="viewport">
            <ul class="overview">
                @foreach ($channels2 as $channel)
                  @if (count($channel->child) > 0 && $channel->id == 29)
                    @foreach ($channel->child as $child)
                        <li class="level1"><a href=" {{$child->url}}" >{{ $child->title }}</a></li>
                    @endforeach
                  @endif
                @endforeach
            </ul>
          </div>
          <div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
        </div>
        <div class="subnav--xsmall show-xsmall button-group">
            <button class="button js-drop" type="button" data-drop="#menu">menu<span class="caret-down"></span></button>
            <ul class="drop drop--down" id="menu" data-drop-menu="">
                @foreach ($channels2 as $channel)
                  @if (count($channel->child) > 0 && $channel->id == 29)
                    @foreach ($channel->child as $child)
                        <li class="level1"><a href=" {{$child->url}}" >{{ $child->title }}</a></li>
                    @endforeach
                  @endif
                @endforeach
                <!-- <li class="level1"><a href="/power/changguan" >超大场馆</a></li>
                <li class="level1"><a href="/power/ceping" >专业测评</a></li>
                <li class="level1"><a href="/power/xunlian" >科学训练 </a></li>
                <li class="level1"><a href="/power/tuandui" >精英教练团队 </a></li>
                <li class="level1"><a href="/power/yanfa" >专业研发中心</a></li> -->
            </ul>
        </div>
    </div>
</div>

<div class="newsletter-main" style="z-index: 9999;
position: relative;margin-top: -12px"> 
    <form action="http://hd.ahyzyx.com/plus/diy.php" enctype="multipart/form-data" method="post"> 
        <input type="text" name="name" id="name" style="width:15%" class="intxt" placeholder="宝贝姓名" /> 
        <input type="text" name="tel" id="tel" style="width:20%" class="intxt" placeholder="家长电话" /> 
        <input type="text" name="nl" id="nl" class="intxt" placeholder="宝宝年龄" style="width:20%"/> 
        <input type="submit" name="submit" value="提 交" style="width:20%"/> 
        <input type="reset" name="reset" value="重 置" style="width:23%"/>
    </form> 
</div>




    <div class="m__w">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" >upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    </div>
    <div class="m__w">
        <div class="grid">
            <div class="col span-5 small-12 xsmall-6">
                <div class="rider-cnt">
                    <h1 class="rider-name">Paowoer<span>训练</span></h1>
                    <div class="rider-showcase">
                        <p>
<script type="text/javascript">// <![CDATA[
(function(){var g=this,h=function(b,d){var a=b.split("."),c=g;a[0]in c||!c.execScript||c.execScript("var "+a[0]);for(var e;a.length&&(e=a.shift());)a.length||void 0===d?c[e]?c=c[e]:c=c[e]={}:c[e]=d};var l=function(b){var d=b.length;if(0<d){for(var a=Array(d),c=0;c<d;c++)a[c]=b[c];return a}return[]};var m=function(b){var d=window;if(d.addEventListener)d.addEventListener("load",b,!1);else if(d.attachEvent)d.attachEvent("onload",b);else{var a=d.onload;d.onload=function(){b.call(this);a&&a.call(this)}}};var n,p=function(b,d,a,c,e){this.f=b;this.h=d;this.i=a;this.c=e;this.e={height:window.innerHeight||document.documentElement.clientHeight||document.body.clientHeight,width:window.innerWidth||document.documentElement.clientWidth||document.body.clientWidth};this.g=c;this.b={};this.a=[];this.d={}},q=function(b,d){var a,c,e=d.getAttribute("pagespeed_url_hash");if(a=e&&!(e in b.d))if(0>=d.offsetWidth&&0>=d.offsetHeight)a=!1;else{c=d.getBoundingClientRect();var f=document.body;a=c.top+("pageYOffset"in window?window.pageYOffset:(document.documentElement||f.parentNode||f).scrollTop);c=c.left+("pageXOffset"in window?window.pageXOffset:(document.documentElement||f.parentNode||f).scrollLeft);f=a.toString()+","+c;b.b.hasOwnProperty(f)?a=!1:(b.b[f]=!0,a=a<=b.e.height&&c<=b.e.width)}a&&(b.a.push(e),b.d[e]=!0)};p.prototype.checkImageForCriticality=function(b){b.getBoundingClientRect&&q(this,b)};h("pagespeed.CriticalImages.checkImageForCriticality",function(b){n.checkImageForCriticality(b)});h("pagespeed.CriticalImages.checkCriticalImages",function(){r(n)});var r=function(b){b.b={};for(var d=["IMG","INPUT"],a=[],c=0;c<d.length;++c)a=a.concat(l(document.getElementsByTagName(d[c])));if(0!=a.length&&a[0].getBoundingClientRect){for(c=0;d=a[c];++c)q(b,d);a="oh="+b.i;b.c&&(a+="&n="+b.c);if(d=0!=b.a.length)for(a+="&ci="+encodeURIComponent(b.a[0]),c=1;c<b.a.length;++c){var e=","+encodeURIComponent(b.a[c]);131072>=a.length+e.length&&(a+=e)}b.g&&(e="&rd="+encodeURIComponent(JSON.stringify(s())),131072>=a.length+e.length&&(a+=e),d=!0);t=a;if(d){c=b.f;b=b.h;var f;if(window.XMLHttpRequest)f=new XMLHttpRequest;else if(window.ActiveXObject)try{f=new ActiveXObject("Msxml2.XMLHTTP")}catch(k){try{f=new ActiveXObject("Microsoft.XMLHTTP")}catch(u){}}f&&(f.open("POST",c+(-1==c.indexOf("?")?"?":"&")+"url="+encodeURIComponent(b)),f.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),f.send(a))}}},s=function(){var b={},d=document.getElementsByTagName("IMG");if(0==d.length)return{};var a=d[0];if(!("naturalWidth"in a&&"naturalHeight"in a))return{};for(var c=0;a=d[c];++c){var e=a.getAttribute("pagespeed_url_hash");e&&(!(e in b)&&0<a.width&&0<a.height&&0<a.naturalWidth&&0<a.naturalHeight||e in b&&a.width>=b[e].k&&a.height>=b[e].j)&&(b[e]={rw:a.width,rh:a.height,ow:a.naturalWidth,oh:a.naturalHeight})}return b},t="";h("pagespeed.CriticalImages.getBeaconData",function(){return t});h("https://leaderbikes.com/team/pagespeed.CriticalImages.Run",function(b,d,a,c,e,f){var k=new p(b,d,a,e,f);n=k;c&&m(function(){window.setTimeout(function(){r(k)},0)})});})();pagespeed.CriticalImages.Run('/mod_pagespeed_beacon','http://leaderbikes.codegraph.jp/index.php/admin/cms_wysiwyg_images/onInsert/key/ac9c983a17fd211c96efc0bdb2acf6cb/?isAjax=true','Ez0F1MDYS1',true,false,'JE3tYgXIamw');
// ]]></script>
</p>
<ul>
    @foreach ($newimg as $element) 
        <li>
            <a href="{{ asset($element) }}" ><img alt="" src="{{ asset($element) }}"  /></a>
        </li> 
    @endforeach   
<!-- <li><a href="{{ asset('paowoer/images/xl1.jpg') }}" ><img alt="" src="{{ asset('paowoer/images/xl1-1.jpg') }}"  /></a></li>
<li><a href="{{ asset('paowoer/images/xl2.jpg') }}" ><img alt="" src="{{ asset('paowoer/images/xl2-2.jpg') }}"  /></a></li>
<li><a href="{{ asset('paowoer/images/xl3.jpg') }}" ><img alt="" src="{{ asset('paowoer/images/xl3-3.jpg') }}"  /></a></li>
<li><a href="{{ asset('paowoer/images/xl4.jpg') }}" ><img alt="" src="{{ asset('paowoer/images/xl4-4.jpg') }}"  /></a></li> -->
</ul>                    
</div>
<div class="rider-stats">
    <p class="rider-stats">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    {!! $new->content !!}
<!-- 跑沃尔引入国际最前沿的体能教学理念和美国幼少儿专用体能训练教材，整合国内多所优秀体育专业院校优势资源，融合运动人体、运动训练、体育教育、体育管理、运动心理、休闲体育、运动康复等专业知识，为孩子提供专业完整的运动评估与训练方案，通过测试、评估、体能课程、营养干预、居家指导等多种方式提高幼少儿体质健康水平。 --></p>
</div>
 <hr class="double-white">

                   <!--  <div class="rider-stats">
                        <h3>天下锦城场馆/ 包河区</h3>
                                                <p><span>咨询热线：</span> / 0551-6901 0087</p>                        
                                                <p><span>地址</span> / 合肥市包河区祁门路与南屏路交口天下锦城综合楼二层</p>
                   <hr class="double-white">				 
					 <div class="rider-stats">
                        <h3>九珑湾场馆/ 包河区</h3>
                                                <p><span>咨询热线：</span> / 0551-6222 2022</p>                        
                                                <p><span>地址</span> / 合肥市包河区繁华大道6699号九珑湾花园B区3层</p>
                   <hr class="double-white">
					 
					 <div class="rider-stats">
                        <h3>明光路场馆/ 瑶海区</h3>
                                                <p><span>咨询热线：</span> / 0551-6901 0092</p>                        
                                                <p><span>地址</span> / 合肥市明光路与胜利路交口锦绣豪庭4号楼3层</p>
                   <hr class="double-white">
					 
					 <div class="rider-stats">
                        <h3>众悦场馆/ 滨湖新区</h3>
                                                <p><span>咨询热线：</span> / 0551-6901 0089</p>                        
                                                <p><span>地址</span> / 合肥市滨湖新区西藏路1318号众悦广场3层</p>
                   <hr class="double-white">				 
					 <div class="rider-stats">
                        <h3>祥源场馆/ 庐阳区</h3>
                                                <p><span>咨询热线：</span> / 0551-6901 0091</p>                        
                                                <p><span>地址</span> / 合肥市庐阳区濉溪路310号（与亳州路交口东北角）祥源广场2层</p>
                   <hr class="double-white">
					 
					 <div class="rider-stats">
                        <h3>三里街场馆/ 瑶海区</h3>
                                                <p><span>咨询热线：</span> / 0551-6901 0090</p>                        
                                                <p><span>地址</span> / 合肥市瑶海区三里街临淮路锦绣嘉苑1号楼3层</p>
                   <hr class="double-white">

                    <div class="rider-stats">
                        <h3>国耀场馆/ 经开区</h3>
                                                <p><span>咨询热线：</span> / 0551-6221 1878</p>                        
                                                <p><span>地址</span> / 经开区石门路与棋枰路交汇处国耀·花半里西门16栋</p>                    
                    </div>
                    <hr class="double-white">
					<div class="rider-stats">
                        <h3>习友路场馆/ 高新区</h3>
                                                <p><span>咨询热线：</span> / 0551-6221 1868</p>                        
                                                <p><span>地址</span> / 高新区习友路与香樟大道东北角圣联香御公馆商业2层</p>
                   <hr class="double-white">
                   
                    <div class="rider-stats">
                        <h3>芙蓉路场馆/ 经开区</h3>
                                                <p><span>咨询热线：</span> / 0551-6222 6676</p>                        
                                                <p><span>地址</span> / 经开区芙蓉路650号（与宝塔路交口向东100米）</p>
                    <hr class="double-white">
                    <div class="rider-stats">
                        <h3>观澜场馆/ 滨湖区</h3>
                                                <p><span>咨询热线：</span> / 0551-6222 6659</p>                        
                                                <p><span>地址</span> / 滨湖新区紫云路与清潭路交口东北角观澜华庭商业楼3层</p>												
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery(".rider-showcase ul li a").fancybox();
    });
</script>

<div class="page-bg" style="background-image: url(http://www.paowoer.com/img/xl.jpg);"></div>
                </div>
            </div>
        </div>
<footer class="f">
    <script type="text/javascript" src="{{ asset('paowoer/js/footer1-1.js') }}"></script>
</footer>

<script type="text/javascript" src="{{ asset('paowoer/js/script.js') }}" ></script>
<script type="text/javascript" src="{{ asset('paowoer/js/slick.min.js') }}" ></script>

<script type="text/javascript">var switchTo5x=true;</script>
                

    </div>
</div>
</body>
</html>
