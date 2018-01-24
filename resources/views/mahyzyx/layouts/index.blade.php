
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta property="wb:webmaster" content="e861c261794bfc60" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0">
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="author" content="order by adminbuy.cn" />
<title>艺朝艺夕安徽</title>
<meta name="description" content="艺朝艺夕是一所专业的少儿艺术培训机构，引进国内外先进教学理念，多年的教学和运营管理经验，成功缔造了独特的培训发展模式。目前艺朝艺夕拥有舞蹈、美术、音乐三大核心主版业务，借助雄厚的师资力量、独特的教学模式，让参与艺朝艺夕学习的少儿拥有多彩的童年。" />
<meta name="keywords" content="艺朝艺夕丨合肥少儿艺术培训学校丨合肥少儿美术丨合肥少儿舞蹈丨合肥少儿钢琴丨合肥少儿电钢琴丨合肥艺术学校" />
<link rel="stylesheet" type="text/css" href="{{ asset('mahyzyx/css/ltkj.css') }}"/>
</head>
<body>
<!--首页头部的开始-->
<div class="ltop">
  <div class="ltopl fl"><img src="{{ asset('mahyzyx/images/logo.png') }}"  /></div>
  <a href="http://js.ahyzyx.com" target="_blank">   南京</a>
  <a href="http://zj.ahyzyx.com" target="_blank">   杭州</a>
  <div class="ltopr fr">
    <div class="dhtp"> <img src="{{ asset('mahyzyx/images/shouji_06.jpg') }}"  /> </div>
    <p>咨询热线：<br />
      <strong>0551-6666 7778</strong></p>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>
</div>

<!--首页头部的结束--> 

<!--nav的开始-->

<div class="lnav">
  <ul>
    <li><a href="{{ asset('mahyzyx/index') }}">网站首页</a></li>
    
    <li><a href="{{ asset('mahyzyx/about') }}">关于我们</a></li>
    
    <li><a href="{{ asset('mahyzyx/case') }}">环境介绍</a></li>
    
    <li><a href="{{ asset('mahyzyx/service') }}">课程介绍</a></li>
    
    <li><a href="{{ asset('mahyzyx/xiaoqu') }}">校区分布</a></li>
    
    <li><a href='http://job.ahyzyx.com'>人才招聘</a></li>
    
  </ul>
</div>

<!--nav的结束--> 

@yield('content')

<!--底部的开始-->
<div class="lbottom">
  <p>© 2016 THE ART LIFE EDUCATION GROUP. All Rights Reserved.<br />
    地址：合肥市芙蓉路650号<br />
    站点导航：<a href='http://www.fuenabc.com' target='_blank'>弗恩英语</a> <a href='http://www.paowoer.com' target='_blank'>跑沃尔</a> </p>
</div>
<div class="lfooter">
  <ul>
    <li><a href="{{ asset('mahyzyx/index') }}"><img src="{{ asset('mahyzyx/images/dbsy.png') }}" width="30" height="30" /><br />
      网站首页</a></li>
    <li><a href="tel:0551-6666 7778"><img src="{{ asset('mahyzyx/images/dbdh.png') }}" width="30" height="30" /><br />
      电话咨询</a></li>
    <li><a href="{{ asset('mahyzyx/xiaoqu') }}"><img src="{{ asset('mahyzyx/images/dbqq.png') }}" width="30" height="30" /><br />
      校区分布</a></li>
    <li><a href="{{ asset('mahyzyx/contact') }}"><img src="{{ asset('mahyzyx/images/dblx.png') }}" width="30" height="30" /><br />
      预约课程</a></li>
  </ul>
</div>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?43bb40a0341219f3a38ff489f0cf9ed0";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1261041437'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s11.cnzz.com/z_stat.php%3Fid%3D1261041437%26show%3Dpic1' type='text/javascript'%3E%3C/script%3E"));</script>

<div class="dbgao"></div>
</body>
<!--焦点图js-->
<script src="{{ asset('mahyzyx/js/jquery-1.9.1.min.js') }}"></script>
<script src="{{ asset('mahyzyx/js/TouchSlide.1.1.js') }}"></script>
<script type="text/javascript">
TouchSlide({ 
  slideCell:"#slides",
  titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
  mainCell:".bd ul", 
  effect:"leftLoop", 
  autoPage:true,//自动分页
  autoPlay:false //自动播放
});
</script>
</html>