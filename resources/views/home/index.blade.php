  @extends('paowoer.layouts.index')
  @section('content')
   <div class="main-container col1-layout home-layout"> 
    <div class="main"> 
     <div class="col-main"> 
      <div class="m"> 
       <div class="m__w"> 
        <!--[if lt IE 8]>
          <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" >upgrade your browser</a> to improve your experience.</p>
        <![endif]--> 
       </div> 
       <nav class="js-stalker-targets"> 
        <ul class="section-nav"> 
         <li class="section-nav__item"> <a class="section-nav__link" href="#home-block1"><span class="section-nav__txt">Top</span></a> </li> 
         <li class="section-nav__item"> <a class="section-nav__link" href="#home-block2"><span class="section-nav__txt">About</span></a> </li> 
         <li class="section-nav__item"> <a class="section-nav__link" href="#home-block3"><span class="section-nav__txt">Venues</span></a> </li> 
         <li class="section-nav__item"> <a class="section-nav__link" href="#home-block4"><span class="section-nav__txt">Test</span></a> </li> 
        </ul> 
       </nav> 
       <div class="js-stalker-markers"> 
        <section id="home-block1" class="section sec-top"> 
         <div class="vertical-center"> 
          <img src="{{ asset('paowoer/images/sec-top__ov.png') }}" alt="" />
         </div> 
         <a href="http://www.paowoer.com/media/pwe.mp4" target="_blank" class="show-touch"></a>
         <button class="button--scroll js-scroll-btn" type="button"><span class="sr-only">scroll</span></button> 
        </section> 
        <section id="home-block2" class="section sec-hilosophy sec-second"> 
         <div class="content__wrap"> 
          <h1 class="ttl sec-philosophy__ttl"> 公司简介 </h1> 
          <p class="section__desc"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;跑沃尔专注于3-18岁少儿运动基础、运动技能和身体素质的提升，开设有基础运动、旱地冰球、跆拳道等课程，训练过程活泼有趣，帮助孩子掌握多种基础运动技能和器械操控技能，使孩子拥有并保持良好的身体素质和运动，从小养成受益终生的运动习惯，为当前及日后从事更高级的专项运动和生活与学习打下良好的基础。 </p> 
         </div> 
        </section> 
        <!-- Homepage Slider --> 
        <section id="home-block5" class="section sec-slideshow sec-second"> 
         <div class="vertical-center" style="z-index:100;">
          <img src="{{ asset('paowoer/images/sec-second__ov.png') }}" alt="" />
         </div> 
         <div class="carousel"> 
          <div>
            <img src="{{ asset('paowoer/images/fabuhui.jpg') }}" alt="Look Book 2016SS" class="fluid" >
          </div>
          <div>
            <img src="{{ asset('paowoer/images/_MG_0841-min_1.jpg') }}" alt="Look Book 2016SS" class="fluid" >
          </div> 
          <div>
            <img src="{{ asset('paowoer/images/_MG_1753-min_1.jpg') }}" alt="Look Book 2016SS" class="fluid" >
          </div> 
          <div>
            <img src="{{ asset('paowoer/images/_MG_0881-min.jpg') }}" alt="Look Book 2016SS" class="fluid" >
          </div> 
          <div>
            <img src="{{ asset('paowoer/images/_MG_2309-min_1.jpg') }}" alt="Look Book 2016SS" class="fluid" >
          </div> 
          <div>
            <img src="{{ asset('paowoer/images/_MG_2425-min.jpg') }}" alt="Look Book 2016SS" class="fluid" >
          </div> 
         </div> 
        </section> 
        <section id="home-block3" class="section sec-products"> 
         <div class="content__wrap"> 
          <h1 class="ttl sec-products__ttl"> 超大场馆 </h1> 
          <p class="section__desc"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;跑沃尔拥有多个1000-3000平米的专业训练场地，集运动训练、室内运动、攀岩、球类、野外拓展及童训营等为一体，配备了国际最先进的少儿运动训练和智力开发教学器材和运动设施，让孩子尽情享受运动的乐趣。 </p> 
          <a class="button button--link" href="about/about.htm">环境设施</a> 
         </div> 
        </section> 
        <section id="home-block4" class="section sec-dealers"> 
         <div class="content__wrap"> 
          <h1 class="ttl sec-dealers__ttl"> 专业测评 </h1> 
          <p class="section__desc"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;跑沃尔教研团队在国民体质监测标准&amp;VSP及国家幼儿运动测试标准的基础上，研究设计了更适合中国少儿的专业测评体系，根据每个孩子的身体状况和运动能力，制订科学的训练方案、合理的营养配餐，有效提高孩子的运动能力和健康水平。 </p> 
          <a class="button button--link" href="about/contact.htm">场馆位置</a> 
         </div> 
        </section> 
       </div> 
      </div> 
     </div> 
    </div> 
   </div>
@endsection