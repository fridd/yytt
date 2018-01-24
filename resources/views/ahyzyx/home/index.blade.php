@extends('ahyzyx.layouts.index')
@section('content')
  <!--banner-start-->
<div class="focus">
  <ul>
    <li><a href="/huanden/2013/0914/2.html"><img src="{{ asset('ahyzyx/images/1-1G21Q41223Q5.jpg') }}" width="1440"></a></li>
    <li><a href="/plus/view.php?aid=4"><img src="{{ asset('ahyzyx/images/1-1G21Q41321353.jpg') }}" width="1440"></a></li>
    <li><a href="/huanden/2013/0914/3.html"><img src="{{ asset('ahyzyx/images/1-1G21Q41245H1.jpg') }}" width="1440"></a></li>
    <li><a href="/huanden/2013/0914/1.html"><img src="{{ asset('ahyzyx/images/1-1G21Q41159361.jpg') }}" width="1440"></a></li>

  </ul>
<!--预约开始-->

    <div class="YC_banner_YY">

      <h1>获取免费课程</h1>

    <form action="http://hd.ahyzyx.com/plus/diy.php" enctype="multipart/form-data" method="post">
    <input type="hidden" name="action" value="post" />
    <input type="hidden" name="diyid" value="3" />
    <input type="hidden" name="do" value="2" />


        <table>
     <input type="hidden" name="time" id="time" value="">
          <tr>
            <td colspan="2">孩子姓名</td>
          </tr>
          <tr class="tr1">
            <td colspan="2"><input type="text" name="name" placeholder="孩子姓名" /></td>
          </tr>
          <tr>
            <td>联系电话</td>
            <td style="padding-left: 7px;">孩子年龄</td>
          </tr>
          <tr  class="tr2" >
            <td><input type="text" name="tel"  placeholder="联系电话" /></td>
            <td><input style="float:right;" type="text" name="nl"  placeholder="孩子年龄"/></td>
          </tr>
          <tr>
            <td>选择课程</td>
            <td style="padding-left: 7px;">所在区域</td>
          </tr>
          <tr class="tr2">
            <td><select name="kc">
                <option selected="selected">美术</option>
                <option selected="selected">舞蹈</option>
                <option selected="selected">音乐</option>
              </select></td>
            <td><select style="float:right;" name="qy">
               <option value="0">所在区域</option>
               <option value='滨湖新区'>滨湖新区</option>
               <option value='庐阳区'>庐阳区</option>
               <option value='包河区'>包河区</option>
               <option value='政务区'>政务区</option>
               <option value='经开区'>经开区</option>
               <option value='高新区'>高新区</option>
               <option value='蜀山区'>蜀山区</option>
               <option value='瑶海区'>瑶海区</option>

                </select></td>
          </tr>
          <tr>
            <td colspan="2"><input class="button form-btn" type="submit" value="立即提交" /></td>
          </tr>
          <tr>
          <input type="hidden" name="dede_fields" value="qy,select;name,text;tel,text;kc,select;nl,text;time,text" />
          <input type="hidden" name="dede_fieldshash" value="9e531f0f1890eddb84e40f2c762772ce" />

            <input type="hidden" name="action" id="action" value="add" />
            <td class="text" colspan="2">免费课程，免费测试！</td>
          </tr>
        </table>
      </form>
    </div>
    <!--预约结束--></div>
    <!--banner-end-->
    <!--content-start-->
    <div class="jrdd">
        <div id="zbsq">
            <strong>专业知识： </strong>
            <div id="zbsq_zs">
                <ul>
                    <li><a href="{{asset('ahyzyx/shouyexinwen')}}">【分享】学艺术的人，总是容易脱颖而出！</a></li>
                    <li><a href="/xinwenzhongxin/yuerjingyan/20180106/68.html">如何培养孩子的古典音乐素养？</a></li>
                    <li><a href="/xinwenzhongxin/yuerjingyan/20170310/41.html">艺朝艺夕5周年：全城25校…</a></li>
                    <li><a href="/xinwenzhongxin/yuerjingyan/20170206/35.html">爱画画的朋友，值得深交！</a></li>
                    <li><a href="/xinwenzhongxin/yuerjingyan/20170206/37.html">听一听藏在孩子心中的话，妈妈们看完都哭了！</a></li>
                    <li><a href="/xinwenzhongxin/yuerjingyan/20170206/36.html">孩子的13大烦恼，你知道却没有在意？</a></li>
                    <li><a href="/xinwenzhongxin/yuerjingyan/20170206/34.html">孩子学舞蹈的9大好处</a></li>
                    <li><a href="/xinwenzhongxin/yuerjingyan/20170122/33.html">爸爸打点滴等女儿上课图意外走红网络</a></li>
                    <li><a href="/xinwenzhongxin/yuerjingyan/20170111/24.html">这是一张来自“现代乐器之王”的邀请函！</a></li>
                </ul>
            </div>
            <a class="zbsq_zuo next"></a><a class="zbsq_you prev"></a>
        </div>
      <script type="text/javascript">            jQuery("#zbsq").slide({ mainCell: "#zbsq_zs ul", effect: "topLoop", vis: 1, scroll: 1, autoPlay: true, interTime: 3000 });</script>
    </div>
    <div class="content">
        <div class="content_box">
            <dl>
                <dd style="text-align:center">
                    <a href="{{asset('ahyzyx/qinzikecheng')}}"><img src="{{ asset('ahyzyx/images/home_36.png') }}" width="50"  /></a>
                     <a href="{{asset('ahyzyx/qinzikecheng')}}"><span>少儿创意美术课程</span></a>
              </dd>
               
<dt><a href="{{asset('ahyzyx/qinzikecheng')}}" class="a2" title="艺朝艺夕少儿创意美术，涵盖美术素养、创意素描、色彩大师三大课程体系。美术素养课从零开始，循序渐进地培养孩子的专业化美术素养。创意素描和色彩大师课程，则分别是线条和色彩领域专业细分后的特色精品课程。">
                    
                           <center>八阶教学课件<br>定制精美画册<br>户外写真课</center>
                        
                </a></dt>
            </dl>
            <dl>
 <dd><a href="{{asset('ahyzyx/yinlekecheng')}}">
                     <img src="{{ asset('ahyzyx/images/home_43.png') }}" width="50" />
                    <span class="span02">少儿特色钢琴课程</span></a>
              </dd>
                
<dt><a href="/yinlekecheng/" class="a2" title="艺朝艺夕少儿特色钢琴开设一对一、一对多班级，融合了钢琴集体课与音乐素养课。教学过程中，采用经典教材及辅助趣味练习曲目，以灵活的教学方法，提高孩子的积极性。专业化师资和系统教学体系，让孩子潜移默化地感知钢琴特色，学习乐理知识，进行手指训练，完成钢琴视奏等。">
                    
                            <center>多样的乐曲风格<br>贴近生活的趣味乐曲<br>独特的音乐素养课</center>
                        
                </a></dt>
            </dl>
            <dl>
                <dd>
          <a href="{{asset('ahyzyx/mengshikecheng')}}">
                  <img src="{{ asset('ahyzyx/images/home_41.png') }}" width="50" />
                     <span class="span03">少儿专业中国舞课程</span></a>
              </dd>
               
<dt><a href="{{asset('ahyzyx/mengshikecheng')}}" class="a2" title="艺朝艺夕少儿中国舞通过系统学习多舞种知识和动作，提升孩子的协调性，强化身韵、气息、舞态、动作韵律、手眼身法等,开拓舞蹈编创视野，培养孩子的舞蹈综合素质和能力。">
                    
                            <center>编撰自由教材<br>趣味化教学<br>添加民族特色舞蹈元素</center>
                        
                </a></dt>
            </dl>
            <dl>
    <dd><a href="{{asset('ahyzyx/yundongkecheng')}}">
                    <img src="{{ asset('ahyzyx/images/home_46.png') }}" width="50" />
                    <span class="span04">少儿电子键盘课程</span></a>
              </dd>
                
<dt><a href="{{asset('ahyzyx/yundongkecheng')}}" class="a2" title="艺朝艺夕少儿电子键盘课程（分单排键与双排键），注重培养综合音乐素养和即兴创作、表演能力。特色小班制，最大程度地照顾到每个孩子的进度；独创速成教材，引导孩子高效学习。">
                    
                            <center>培养专注度均衡身心发展<br>即兴演奏培养编创能力<br>定制舞台表演</center>
                        
                </a></dt>
            </dl>
            <dl class="lastdl">
    <dd><a href="{{asset('ahyzyx/yujiaokecheng')}}">
                    <img src="{{ asset('ahyzyx/images/home_48.png') }}" width="50" />
                    <span class="span05">少儿国标舞课程</span></a>
              </dd>
                
<dt><a href="{{asset('ahyzyx/yujiaokecheng')}}/" class="a2" title="艺朝艺夕少儿国标舞，带孩子逐步接触和学习恰恰、伦巴、桑巴、牛仔、斗牛，在全舞种学习的基础上，家长可根据孩子的喜好和天赋，帮助他们选择一两种进行专业方向的提升。此外，课程内容除舞蹈技艺学习外，还包括形体塑造、气质培养、情绪控制、舞台表演等，可促进孩子生理和心理的健康发展。">
                    
                            <center>穿插情绪管理模块<br>培养独特个人气质<br>线上教学辅助</center>
                        
                </a></dt>
            </dl>
        </div>
    </div>
<div class="content02">
        <div class="content02_left">
            <p class="tit">
            <a href="{{asset('ahyzyx/news')}}" class="left_s">MORE+</a><span class="dazi">新闻中心</span><span>News</span></p>
            <ul>
                
                       <li><span class="time">
                            2018-01-08</span><span>·</span><a href="{{asset('ahyzyx/shouyexinwen')}}">【分享】学艺术的人，总是容易...</a></li>
                        <li><span class="time">
                            2018-01-06</span><span>·</span><a href="/xinwenzhongxin/yuerjingyan/20180106/68.html">如何培养孩子的古典音乐素养？...</a></li>
                        <li><span class="time">
                            2018-01-06</span><span>·</span><a href="/news/gonggao/20180106/67.html">艺朝艺夕2017年度最美校区评选打...</a></li>
<li><span class="time">
                            2018-01-05</span><span>·</span><a href="/xinwenzhongxin/xinwenzhuankan/20180105/64.html">青阳路校区盛大开业！去没去的...</a></li>
<li><span class="time">
                            2018-01-05</span><span>·</span><a href="/news/20180105/66.html">艺朝艺夕与合肥幼专校企战略合...</a></li>
<li><span class="time">
                            2018-01-05</span><span>·</span><a href="/xinwenzhongxin/xinwenzhuankan/20180105/65.html">放假通知...</a></li>

                    
            </ul>
        </div>
       <div class="sql_ti">
                        <span class="dazi">家长留言</span><span>Message</span>
                    </div>
        <div id="con" class="content02_midd">
  
  <ul>
    <li>
      <div class="div_left"><a href="javascript:void(0)"><img src="{{ asset('ahyzyx/images/head1.jpg') }}" title="dlonglife"></a></div>
      <div class="div_right">
        <a href="javascript:void(0)" target="_blank">dlonglife</a>：很不错啊，已经办了年卡了，有点贵。
        <div class="twit_item_time">3分钟前</div>
      </div>
    </li>
    <li>
      <div class="div_left"><a href="javascript:void(0)"><img src="{{ asset('ahyzyx/images/head2.jpg') }}" title="妈咪很爱豆豆"></a></div>
      <div class="div_right">
        <a href="javascript:void(0)" target="_blank">妈咪很爱豆豆</a>：去过哪里的，很不错的哦！离那边挺近的，小孩在哪里学习美术挺好的呢，想学习的可以去看看。
        <div class="twit_item_time">13分钟前</div>
      </div>
    </li>
    <li>
      <div class="div_left"><a href="javascript:void(0)"><img src="{{ asset('ahyzyx/images/head3.jpg') }}" title="wenteem"></a></div>
      <div class="div_right">
        <a href="javascript:void(0)" target="_blank">wenteem</a>：宝宝很喜欢你们的美术课，回家里一直问什么时候还能再去，老师也很热情细心。
        <div class="twit_item_time">16分钟前</div>
      </div>
    </li>
    <li>
      <div class="div_left"><a href="javascript:void(0)"><img src="{{ asset('ahyzyx/images/head4.jpg') }}" title="dpuser_70871790689"></a></div>
      <div class="div_right">
        <a href="javascript:void(0)" target="_blank">dpuser_70871790689</a>：今天带宝贝去体验了舞蹈课，环境很好，校区也是老师亲自布置的，每个老师都很亲切，一个充满朝气和活力的团体，宝贝很喜欢那里。
        <div class="twit_item_time">17分钟前</div>
      </div>
    </li>
    <li>
      <div class="div_left"><a href="javascript:void(0)"><img src="{{ asset('ahyzyx/images/head5.jpg') }}" title="倩丫头的天空"></a></div>
      <div class="div_right">
        <a href="javascript:void(0)" target="_blank">倩丫头的天空</a>：学校和美术教室布置的很漂亮，而且是老师自己设计装饰的，特别温馨有爱，老师也比较负责，对孩子比较关心，体验效果很好，孩子非常喜欢，朋友家的孩子有在这里学习的，我家宝贝已经报名了，以后会介绍朋友到这里来的。
        <div class="twit_item_time">18分钟前</div>
      </div>
    </li>
    <li>
      <div class="div_left"><a href="javascript:void(0)"><img src="{{ asset('ahyzyx/images/head6.jpg') }}" title="胖笨大熊"></a></div>
      <div class="div_right">
        <a href="javascript:void(0)" target="_blank">胖笨大熊</a>：老师非常好不过我下班后时间有点赶。
        <div class="twit_item_time">22分钟前</div>
      </div>
    </li>
    <li>
      <div class="div_left"><a href="javascript:void(0)"><img src="{{ asset('ahyzyx/images/head7.jpg') }}" title="yuanpen"></a></div>
      <div class="div_right">
        <a href="javascript:void(0)" target="_blank">yuanpen</a>：老师很专业，也很漂亮，孩子挺喜欢在这边学习的。
        <div class="twit_item_time">1小时前</div>
      </div>
    </li>
  </ul>
</div>
<div class="content02_right">
            <div class="yujue">
                <span class="yu_pic"></span><span class="dazi">课程预约</span><br />
                <span class="marg-y">Leave us a nota</span>
            </div>
            <div class="form_box_x"> 
<form action="http://hd.ahyzyx.com/plus/diy.php" enctype="multipart/form-data" method="post">
<input type="hidden" name="action" value="post" />
<input type="hidden" name="diyid" value="5" />
<input type="hidden" name="do" value="2" />

                <p>
                    <span class="bian_x">联系电话</span><input type="text" class="te_shur" name="tel" onfocus="if (value =='请填写家长联系电话'){value =''}"
                        onblur="if (value ==''){value='请填写家长联系电话'}" value="请填写家长联系电话" />
                     
                </p>
                <p>
                    <span class="bian_x">宝宝名字</span><input type="text" class="te_shur" name="name" onfocus="if (value =='请填写宝宝姓名'){value =''}"
                        onblur="if (value ==''){value='请填写宝宝姓名'}" value="请填写宝宝姓名" />
                </p>
                <p>
                    <span class="bian_x">宝宝年龄</span><input type="text" class="te_shur" name="nl" onfocus="if (value =='请填写宝宝年龄'){value =''}"
                        onblur="if (value ==''){value='请填写宝宝年龄'}" value="请填写宝宝年龄" /></p>
                <p style="height: 27px; padding-top: 10px">
<input type="hidden" name="dede_fields" value="name,text;time,text;nl,text;kc,text;qy,text;qd,text;xb,text;tel,text" />
<input type="hidden" name="dede_fieldshash" value="3d875d78a9aaef671491ffe3f66b3771" /></table>

                    <input type="submit" class="tij" value=" " /><a class="gd_xx" href="/yuyue/">更多选项>></a></p>
                    
              </form>
            </div>
        </div>
    </div>
    <!--content-end-->



@endsection