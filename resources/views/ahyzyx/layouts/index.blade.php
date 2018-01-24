<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>艺朝艺夕</title>
<meta property="wb:webmaster" content="e861c261794bfc60" />
<meta name='description' content='艺朝艺夕是一所专业的少儿艺术培训机构，引进国内外先进教学理念，多年的教学和运营管理经验，成功缔造了独特的培训发展模式。目前艺朝艺夕拥有舞蹈、美术、音乐三大核心主版业务，借助雄厚的师资力量、独特的教学模式，让参与艺朝艺夕学习的少儿拥有多彩的童年。' />
<meta name='keywords' content='艺朝艺夕,合肥少儿艺术培训,合肥少儿美术,合肥少儿舞蹈,合肥少儿钢琴,艺术教育' />
<link href="{{ asset('ahyzyx/css/style.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="{{ asset('ahyzyx/css/YC.css') }}"/>
<script type="text/javascript" src="{{ asset('ahyzyx/js/jquery-1.9.0.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('ahyzyx/js/slide.js') }}"></script>
<!--nav-js-->
<script type="text/javascript" src="{{ asset('ahyzyx/js/banner.js') }}"></script>
<!--banner-js-->
<script src="{{ asset('ahyzyx/js/jquery.SuperSlide.js') }}" type="text/javascript"></script>
<!--jQuery-->
<script type="text/javascript" src="{{ asset('ahyzyx/js/jquery.js') }}"></script>
<!--jQuery动画暂停插件-->
<script type="text/javascript" src="{{ asset('ahyzyx/js/jquery.pause.min.js') }}"></script>
<!--滚动效果js-->
<script type="text/javascript">
$(function () {
    var scrtime;

    var $ul = $("#con ul");
    var liFirstHeight = $ul.find("li:first").height();//第一个li的高度
    $ul.css({ top: "-" + liFirstHeight - 20 + "px" });//利用css的top属性将第一个li隐藏在列表上方   因li的上下padding:10px所以要-20

    $("#con").hover(function () {
        $ul.pause();//暂停动画
        clearInterval(scrtime);
    }, function () {
        $ul.resume();//恢复播放动画 
        scrtime = setInterval(function scrolllist() {
            //动画形式展现第一个li
            $ul.animate({ top: 0 + "px" }, 1500, function () {
                //动画完成时
                $ul.find("li:last").prependTo($ul);//将ul的最后一个剪切li插入为ul的第一个li
                liFirstHeight = $ul.find("li:first").height();//刚插入的li的高度
                $ul.css({ top: "-" + liFirstHeight - 20 + "px" });//利用css的top属性将刚插入的li隐藏在列表上方  因li的上下padding:10px所以要-20         
            });
        }, 3300);

    }).trigger("mouseleave");//通过trigger("mouseleave")函数来触发hover事件的第2个函数

});
</script>

<!--左右滚动-js-->
</head>
<body>
    <!--header-start-->
   <script type="text/javascript">        (function () {            var sUserAgent = navigator.userAgent;            if (sUserAgent.indexOf('Android') > -1 || sUserAgent.indexOf('iPhone') > -1 || sUserAgent.indexOf('iPad') > -1 || sUserAgent.indexOf('iPod') > -1 || sUserAgent.indexOf('Symbian') > -1) {
                location.href = 'http://m.ahyzyx.com';            } else {
            }        })();    </script> 
  <div class="header">
          <div class="top">
              <a href="/"> <span class="logo"><img src="{{ asset('ahyzyx/images/logo.jpg') }}" width="235" alt="艺朝艺夕" /></span></a>
               <span><img src="{{ asset('ahyzyx/images/home_03.jpg') }}" width="15" /></span>
               <span class="logo02"><img src="{{ asset('ahyzyx/images/home_12.png') }}" width="323" /></span>
               <dt>
               <a href="http://www.njyzyx.cn" class="a1" target="_blank">南京校区</a>     |    
<a href="http://www.hzyzyx.cn" class="a1" target="_blank">杭州校区</a>
               </dt>
               <dd></dd>
          </div> 
          <!--史记-start-->
               
          <!--nav-start-->
          <div class="nav_box">          
               <div class="nav">
               <ul id="nav">
               <li class="mainlevel" id="mainlevel_01"><a href="{{ asset('ahyzyx/index') }}" class="bg01">首　页</a></li>
               
               <li class="mainlevel" id="mainlevel_02"><a href="{{ asset('ahyzyx/about') }}" class="bg02">关于我们</a>
               <ul id="sub_02">
               <span><img src="{{ asset('ahyzyx/images/jt_02.png') }}" width="5" /></span>
               
               <dl><a href="{{asset('ahyzyx/about')}}"><img src="{{asset('ahyzyx/images/gywm.jpg') }}" width="203" /></a>
               </dl>
               
              
               <li><a href="{{ asset('ahyzyx/guanyuwomen')}}" class="a02">【关于我们】</a></li>
               
               <li><a href="{{ asset('ahyzyx/jingpingaikuang')}}" class="a02">【课程体系】</a></li>
               
               <li><a href="{{asset('ahyzyx/jingpinwenhua')}}" class="a02">【科学教研】</a></li>
               
               <li><a href="{{asset('ahyzyx/jiaoshituandui')}}" class="a02">【师资力量】</a></li>
               
               <li><a href="{{asset('ahyzyx/yuyuetiyan')}}" class="a02">【环境设备】</a></li>
                
               </ul>
               </li>
               
               <li class="mainlevel" id="mainlevel_03"><a href="{{ asset('ahyzyx/course') }}" class="bg03">课程介绍</a>
               <ul id="sub_03">
               <span><img src="{{ asset('ahyzyx/images/jt_03.png') }}" width="5" /></span>
               
               <dl><a href="{{asset('ahyzyx/course')}}"><img src="{{ asset('ahyzyx/images/zjkc.jpg') }}" width="203" /></a>
               </dl>
               
              
              
               <li><a href="{{asset('ahyzyx/jiaoyuyoushi')}}" class="a03">【课程特色】</a></li>
               
               <li><a href="{{asset('ahyzyx/icourse')}}" class="a03">【课程分类】</a></li>
               
               <li><a href="{{asset('ahyzyx/yuyue')}}" class="a03">【在线预约】</a></li>
                
               
               </ul>
               </li>
               
               <li class="mainlevel" id="mainlevel_04"><a href="http://job.ahyzyx.com" class="bg04">人才招聘</a>
               <ul id="sub_04">
               <span><img src="{{ asset('ahyzyx/images/jt_04.png') }}" width="5" /></span>
               
               <dl><a href="http://job.ahyzyx.com" target="_blank"><img src="{{ asset('ahyzyx/images/zthd.jpg') }}" width="203" /></a>
               </dl>
               
               
               
               </ul>
               </li>
               
               <li class="mainlevel" id="mainlevel_05"><a href="{{ asset('ahyzyx/join') }}" class="bg05">在线课堂</a>
               <ul id="sub_05">
               <span><img src="{{ asset('ahyzyx/images/jt_05.png') }}" width="5" /></span>
               
               <dl><a href="{{ asset('ahyzyx/join') }}"><img src="{{ asset('ahyzyx/images/jmhz.png') }}" width="203" /></a>
               </dl>

              
               <li><a href="{{asset('ahyzyx/xingyetedian')}}" class="a05">【美术课堂】</a></li>
               
               <li><a href="{{asset('ahyzyx/jiamengyoushi')}}"  class="a05">【舞蹈课堂】</a></li>
               
               <li><a href="{{asset('ahyzyx/jiamengzhichi')}}" class="a05">【音乐课堂】</a></li>
               
               <li><a href="{{asset('ahyzyx/changjianwenti')}}" class="a05">【常见问题】</a></li>
                   
               </ul>
               </li>
               
               <li class="mainlevel" id="mainlevel_06"><a href="{{ asset('ahyzyx/news') }}" class="bg06">新闻中心</a>
               <ul id="sub_06">
               <span><img src="{{ asset('ahyzyx/images/jt_06.png') }}" width="5" /></span>
               
               <dl><a href="{{ asset('ahyzyx/news') }}"><img src="{{ asset('ahyzyx/images/xwzx.jpg') }}" width="203" /></a>
               </dl>
                
              
               <li><a href="{{asset('ahyzyx/xinwenzhuankan')}}" class="a06">【新闻动态】</a></li>
               
               <li><a href="{{asset('ahyzyx/yuerjingyan')}}" class="a06">【专业知识】</a></li>
               
               <li><a href="{{asset('ahyzyx/gonggao')}}" class="a06">【精彩活动】</a></li>
                
               </ul>
               </li>
               
               <li class="mainlevel" id="mainlevel_07"><a href="{{ asset('ahyzyx/Contact') }}" class="bg07">联系我们</a>
               <ul id="sub_07">
               <span><img src="{{ asset('ahyzyx/images/jt_07.png') }}" width="5" /></span>
              
               <dl><a href="{{ asset('ahyzyx/Contact') }}"><img src="{{ asset('ahyzyx/images/lxwm.jpg') }}" width="203" /></a>
               </dl>
               
              
               <li><a href="{{asset('ahyzyx/falvshengming')}}" class="a07">【法律声明】</a></li>
               
               <li><a href="http://job.ahyzyx.com" class="a07">【人才招聘】</a></li>
               
               <li><a href="{{ asset('ahyzyx/Contact') }}" class="a07">【联系我们】</a></li>
                
               </ul>
               </li>
               </ul>
               <em><a href="{{ asset('ahyzyx/yuyue') }}"><img src="{{ asset('ahyzyx/images/jmyq1.png') }}" width="115" alt="课程预约" /></a></em> 
               </div>      
               <div class="nav_bg"></div>
          </div>
          <!--nav-ends-->          
</div>
<!--header-end-->



    @yield('content')

   
<!--footer-start-->
       
   <div class="footer">
         <div class="footer_box">
              <div class="footer_box_left">
              <p class="title01">特色课程</p>

<dl><a href="{{ asset('ahyzyx/qinzikecheng') }}" class="a3">创意美术</a> | </dl>

<dl><a href="{{ asset('ahyzyx/yinlekecheng') }}" class="a3">特色钢琴</a> | </dl>

<dl><a href="{{ asset('ahyzyx/mengshikecheng') }}" class="a3">中国舞</a> | </dl>

<dl><a href="{{ asset('ahyzyx/yundongkecheng') }}" class="a3">电子键盘</a> | </dl>

<dl><a href="{{ asset('ahyzyx/yujiaokecheng') }}" class="a3">国标舞</a> | </dl>

<dl><a href="{{ asset('ahyzyx/fenxiangyuedu') }}" class="a3">街舞</a> | </dl>

              </div>
              
              <div class="footer_box_left">
              <p class="title01">辅助导航</p>
            
<dl><a href="{{asset('ahyzyx/falvshengming')}}" class="a3">法律声明</a> | </dl>

<dl><a href="http://job.ahyzyx.com" class="a3">人才招聘</a> | </dl>

<dl><a href="{{ asset('ahyzyx/Contact') }}" class="a3">联系我们</a> | </dl>

              </div>
              
              <div class="footer_box_right">
              <p class="title01"><a class="left_s" href="{{ asset('ahyzyx/about') }}">MORE+</a>关于我们</p>


              <div class="footer_box_right_nr"> 
              
                 
                 安徽艺朝艺夕教育咨询有限公司是一所专业的少儿艺术教育机构，凭借多年的教学和运营管理经验，成功缔造了独特的艺朝艺夕艺术教育发展模式...</div>
              </div>
              
         </div>
         <div class="copyright">版权所有：艺朝艺夕教育集团 全国客服：0551-66667778 皖ICP备13002245号 <a target="_blank" href="http://www.yzyx666.com/">艺朝艺夕教育集团</a><br />站点导航：<a href='http://www.fuenabc.com' target='_blank'>弗恩英语</a> <a href='http://www.paowoer.com' target='_blank'>跑沃尔</a> 
</div>
    </div>
<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1000225218'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s96.cnzz.com/z_stat.php%3Fid%3D1000225218%26show%3Dpic1' type='text/javascript'%3E%3C/script%3E"));</script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?1cc0c3be7febabdaea6cfb91807a1685";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

<script type="text/javascript" src="http://www.yzyx666.com/jsized.snow.min.js"></script> 
<script> 
createSnow('', 60); 
</script>

    <!--footer-end-->
</body>
</html>