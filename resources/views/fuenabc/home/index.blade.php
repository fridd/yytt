@extends('fuenabc.layouts.index')
@section('content')
<div id="bd">
  <div id="banner">
  <div class="banner-bg">
	</div>
    <div class="flexslider">
      <ul class="slides">


        <li class="s2"> <img src="{{ asset('fuenabc/images/banner2.jpg') }}" alt="弗恩英语">
          <div class="ban-txt">
            <h2 data-animate="fadeInRight" class="animated">Kindergarten Course 幼儿阶段</h2>
            <h3 data-animate="fadeInDown" class="animated">【适合年龄】3-6岁</h3>
            <h4 data-animate="fadeInUp" class="animated"></h4>
            <h6 data-animate="fadeInUp" class="animated">数百种专业教具、3000多个互动教学课件</h6>
          </div>
        </li>
		<li class="s3"> <img src="{{ asset('fuenabc/images/banner2.jpg') }}') }}" alt="弗恩英语">
          <div class="ban-txt">
            <h2 data-animate="fadeInDown" class="animated">Link Course衔接课程</h2>
            <h3 data-animate="fadeInRight" class="animated">【适合年龄】6-7岁</h3>
            <h4 data-animate="fadeInUp" class="animated">弗恩英语为步入小学或刚刚步入小学阶段零基础的孩子专设了Link Course幼小衔接课程，旨在于帮助该阶段的孩子打牢基础</h4>
          </div>
        </li>
		<li class="s1"> <img src="{{ asset('fuenabc/images/youer.jpg') }}" alt="弗恩英语">
          <div class="ban-txt">
            <h5 data-animate="fadeInDown" class="animated">浸入式学习环境结合主题情景式教学，让孩子在潜移默化中养成用英语去思考、分析和解决问题的习惯</h5>
            <h2 data-animate="fadeInRight" class="animated">少儿阶段课程</h2>
            <h3 data-animate="fadeInUp" class="animated">Primary School Courses（7-13岁）</h3>
          </div>
        </li>
		<li class="s1"> <img src="{{ asset('fuenabc/images/banner1.jpg') }}" alt="弗恩英语">
          <div class="ban-txt">
            <h5 data-animate="fadeInDown" class="animated">系统新概念教材的学习，结合公立学校教材知识重、难点，更有针对性的全面提高孩子英语综合能力，快速培优</h5>
            <h2 data-animate="fadeInRight" class="animated">青少年阶段课程</h2>
            <h3 data-animate="fadeInUp" class="animated">Middle School Course（11-18岁）</h3>
          </div>
        </li>

      </ul>
    </div>
  </div>
  <!-- end #banner -->
  <div class="row1 fix">
    <div class="wp">
      <div class="tit-i">
       <center><div><img src="{{ asset('fuenabc/images/jiaoxue.jpg') }}"  style="text-align:center;width:900px;"></div></center>
        <h3>弗恩的课程</h3>
        <h5>V-RON <span>COURSES</span></h5>
      </div><center><div>
      <ul class="ul-icon-i">
        <li class="li1">
          <div class="pad"> <a href="http://www.fuenabc.com/a/kehuanli/kechengjieshao/2018/0109/103.html"> <span></span>
            <h3><strong>Kindergarten Courses<br>幼儿课程阶段</strong></h3>
            <em></em>

            <div class="pic"> <img src="{{ asset('fuenabc/images/m1.png') }}" alt=""> <img src="{{ asset('fuenabc/images/m2.png') }}" alt="" class="pic-icon"> </div>
            </a> </div>
        </li>
        <li class="li2">
          <div class="pad"> <a href="http://www.fuenabc.com/a/kehuanli/kechengjieshao/2018/0109/101.html"> <span></span>
            <h3><strong>Link Course<br>衔接课程阶段</strong></h3>
            <em></em>

            <div class="pic"> <img src="{{ asset('fuenabc/images/m3.png') }}" alt=""> <img src="{{ asset('fuenabc/images/m4.png') }}" alt="" class="pic-icon"> </div>
            </a> </div>
        </li>
        <li class="li3">
          <div class="pad"> <a href="http://www.fuenabc.com/a/kehuanli/kechengjieshao/2018/0109/100.html"> <span></span>
            <h3><strong>Primary School Courses<br>少儿课程阶段</strong></h3>
            <em></em>

            <div class="pic"> <img src="{{ asset('fuenabc/images/m5.png') }}" alt=""> <img src="{{ asset('fuenabc/images/m6.png') }}" alt="" class="pic-icon"> </div>
            </a> </div>
        </li>
		  <li class="li3">
          <div class="pad"> <a href="http://www.fuenabc.com/a/kehuanli/kechengjieshao/2018/0109/99.html"> <span></span>
            <h3><strong>Middle School Courses<br>青少年课程阶段</strong></h3>
            <em></em>

            <div class="pic"> <img src="{{ asset('fuenabc/images/m7.png') }}" alt=""> <img src="{{ asset('fuenabc/images/m8.png') }}" alt="" class="pic-icon"> </div>
            </a> </div>
        </li>
        </ul></div>
    </div>
  </div>
  <div class="row2 fix">
    <div class="wp">
      <div class="tit-i">
        <h3>弗恩的环境</h3>
        <h5><span>environment</span> of v-ron</h5>
      </div>
      <div class="case-i">
        <div class="case-i-r" style="width: 100%;">
          <ul class="ul-case-i">
            <li> <a href="{{ asset('fuenabc/news') }}">
              <div class="pic"><img src="{{ asset('fuenabc/images/1-1P1091H5070-L.jpg') }}" alt="幼儿阶段课程 (3-6岁)"></div>
              <div class="hover"> <b></b>
                <div class="txt"> <img src="{{ asset('fuenabc/images/logo_small.png') }}" alt="">
                  <h3>幼儿阶段课程 (3-6岁)</h3>
                </div>
              </div>
              </a> </li>
<li> <a href="{{ asset('fuenabc/news') }}">
              <div class="pic"><img src="{{ asset('fuenabc/images/1-1P1091G054191.jpg') }}" alt="少儿阶段课程（7-13岁）"></div>
              <div class="hover"> <b></b>
                <div class="txt"> <img src="{{ asset('fuenabc/images/logo_small.png') }}" alt="">
                  <h3>少儿阶段课程（7-13岁）</h3>
                </div>
              </div>
              </a> </li>
<li> <a href="{{ asset('fuenabc/news') }}">
              <div class="pic"><img src="{{ asset('fuenabc/images/1-1P1091G152640.jpg') }}" alt="青少年阶段课程（11-18岁）"></div>
              <div class="hover"> <b></b>
                <div class="txt"> <img src="{{ asset('fuenabc/images/logo_small.png') }}" alt="">
                  <h3>青少年阶段课程（11-18岁）</h3>
                </div>
              </div>
              </a> </li>
<li> <a href="{{ asset('fuenabc/news') }}">
              <div class="pic"><img src="{{ asset('fuenabc/images/1-1P1091G00I23.jpg') }}" alt="衔接课程（6-7岁）"></div>
              <div class="hover"> <b></b>
                <div class="txt"> <img src="{{ asset('fuenabc/images/logo_small.png') }}" alt="">
                  <h3>衔接课程（6-7岁）</h3>
                </div>
              </div>
              </a> </li>

          </ul>
        </div>
        <div class="c"></div>
        <div class="more-i"><a href="/a/kehuanli/"></a></div>
      </div>
    </div>
  </div>
  <div class="row3 news-bg">
    <div class="wp">
      <div class="tit-i tit-i-1">
        <h3>最新动态</h3>
        <h5>our <span>news</span></h5>
      </div>
      <ul class="ul-news-i">
        <li>
          <div class="pad">
            <div class="txt"> <span><em>01/09</em>2018</span>
              <h3><a href="{{ asset('fuenabc/news') }}">弗恩英语2.0产品战略升级发</a></h3>
              <p>1月10日，弗恩英语2.0产品战略升级发布盛典将隆重举行！1月10日下午2点至4点，凤凰网将进行全...</p>
              <a href="{{ asset('fuenabc/news') }}" class="more"></a> </div>
            <div class="hover">
              <div class="img" style="background: url({{ asset('fuenabc/images/1-1P109145013D0.png') }}) 0 0 /100% 100% no-repeat;background: url({{ asset('fuenabc/images/1-1P109145013D0.png') }});"></div>
              <div class="pad">
                <h3><a href="{{ asset('fuenabc/news') }}">弗恩英语2.0产品战略升级发</a></h3>
                <p>1月10日，弗恩英语2.0产品战略升级发布盛典将隆重举行！1月10日下午2点至4点，凤凰网将进行全...</p>
              </div>
            </div>
          </div>
        </li>
<li>
          <div class="pad">
            <div class="txt"> <span><em>01/06</em>2018</span>
              <h3><a href="{{ asset('fuenabc/news') }}">弗恩英语2017年度最美校区评</a></h3>
              <p>弗恩英语“2017年度最美校区”入围评选！

...</p>
              <a href="{{ asset('fuenabc/news') }}" class="more"></a> </div>
            <div class="hover">
              <div class="img" style="background: url({{ asset('fuenabc/images/1-1P106111P00-L.jpg') }}) 0 0 /100% 100% no-repeat;background: url({{ asset('fuenabc/images/1-1P106111P00-L.jpg') }}) 0 0 no-repeat\9;"></div>
              <div class="pad">
                <h3><a href="{{ asset('fuenabc/news') }}">弗恩英语2017年度最美校区评</a></h3>
                <p>弗恩英语“2017年度最美校区”入围评选！

...</p>
              </div>
            </div>
          </div>
        </li>
<li>
          <div class="pad">
            <div class="txt"> <span><em>01/05</em>2018</span>
              <h3><a href="{{ asset('fuenabc/news') }}">即将盛大开业 | 此刻...请擦</a></h3>
              <p>地址：
青阳路和淠河路颐和阳光大厦二层商铺（南区）
电话：
0551-6255 5578...</p>
              <a href="{{ asset('fuenabc/news') }}" class="more"></a> </div>
            <div class="hover">
              <div class="img" style="background: url({{ asset('fuenabc/images/1-1P1052101339B.jpg') }}) 0 0 /100% 100% no-repeat;background: url({{ asset('fuenabc/images/1-1P1052101339B.jpg') }}) 0 0 no-repeat\9;"></div>
              <div class="pad">
                <h3><a href="{{ asset('fuenabc/news') }}">即将盛大开业 | 此刻...请擦</a></h3>
                <p>地址：
青阳路和淠河路颐和阳光大厦二层商铺（南区）
电话：
0551-6255 5578...</p>
              </div>
            </div>
          </div>
        </li>
<li>
          <div class="pad">
            <div class="txt"> <span><em>01/05</em>2018</span>
              <h3><a href="{{ asset('fuenabc/news') }}">放假通知</a></h3>
              <p>1月3日，合肥市出现入冬以来范围最大、强度最强的降雪过程。为确保学员安全，艺朝艺夕现针...</p>
              <a href="{{ asset('fuenabc/news') }}" class="more"></a> </div>
            <div class="hover">
              <div class="img" style="background: url({{ asset('fuenabc/images/1-1P10521055QS.jpg') }}) 0 0 /100% 100% no-repeat;background: url({{ asset('fuenabc/images/1-1P10521055QS.jpg') }}) 0 0 no-repeat\9;"></div>
              <div class="pad">
                <h3><a href="{{ asset('fuenabc/news') }}">放假通知</a></h3>
                <p>1月3日，合肥市出现入冬以来范围最大、强度最强的降雪过程。为确保学员安全，艺朝艺夕现针...</p>
              </div>
            </div>
          </div>
        </li>

      </ul>
      <div class="c"></div>
      <div class="news-more"><a href="{{ asset('fuenabc/xinwendongtai') }}">load more</a></div>
    </div>
  </div>
  <div class="row4 fix">
    <div class="wp">
      <div class="tit-i">
        <h3>联系我们</h3>
        <h5><span>contact</span> dede58</h5>
      </div>
      <div class="contact-l">
        <ul class="ul-contact">
          <li class="li1">合肥市经开区芙蓉路650号</li>
          <li class="li2"><a href="tel:0551-66667773">0551-66667773 (咨询)</li>
        </ul>
      </div>
      <div class="contact-r">
        <form action="http://hd.ahyzyx.com/plus/diy.php" class="contact-form" enctype="multipart/form-data" method="post">
          <input type="hidden" name="action" value="post" />
          <input type="hidden" name="diyid" value="2" />
          <input type="hidden" name="do" value="2" />
          <div class="">
            <input type="text" class="inp l" name="name" id="name" placeholder="宝宝姓名">
            <input type="text" class="inp r" name="tel" id="tel" placeholder="家长电话">
          </div>
           <input type='hidden' name='time' id='time' style='width:250px' class='intxt' value='' />
          <input type="hidden" name="dede_fields" value="name,text;nl,text;tel,text;time,text" />
          <input type="hidden" name="dede_fieldshash" value="51915e24a1d14f29f7b100864ae5f412" />
          <input type="submit" value="预约体验课程" class="sub" id="sub">
        </form>
      </div>
    </div>
  </div>
  <div class="map">
    <div class="map-s"> <a href="javascript:void(0);" class="btn"><em></em>点击展开地图</a> </div>
    <div class="map-pop"> <a href="javascript:void(0);" class="btn-down"></a>
      <div class="map-bg1"></div>
      <div class="map-bg2"></div>
<iframe frameborder="0" height="500" marginheight="0" marginwidth="0" scrolling="no" src="http://www.ahyzyx.com/ditu/fuen.html" width="100%"></iframe>
    </div>
  </div>
</div>
<div class="c"></div>




  @endsection