@extends('ahyzyx.layouts.index')
@section('content')
<!--banner-start-->  
 
 <div class="zy_ban" style=" background-image:url({{asset('ahyzyx/images/coursebj.png')}})">
 	
 </div>
 
<!--banner-end-->    

<!--content-start-->
 <div class="zy_cent">
 	<div class="box_1005">
    	<div class="hbjy">
        	<a href="#" class="hp"><img src="{{asset('ahyzyx/images/yuyue_bx.png')}}" width="383" height="89"  /></a>
            <p class="dqwz"><a href='http://www.ahyzyx.com/'>主页</a> > <a href="{{asset('ahyzyx/yuyue')}}">课程预约</a> > </p>
            <div class="clear"></div>
        </div>
      	<div class="bati yux">
        	<span class="min_c">课程预约</span>
        	<ul style="    width: 550px;">
            	
            	<li><a href="{{asset('ahyzyx/jiaoyuyoushi')}}">课程特色</a></li>

              <li><a href="{{asset('ahyzyx/icourse')}}">课程分类</a></li>

              <li><a href="{{asset('ahyzyx/yuyue')}}">在线预约</a></li>
         
               
                     
          </ul>
        </div>
        <div class="qh_neir">
        	<div class="pic_996">
            	<div class="box_959">
                	<div class="yu_l">
                <form action="http://hd.ahyzyx.com/plus/diy.php" enctype="multipart/form-data" method="post">
                       <input type="hidden" name="action" value="post" />
<input type="hidden" name="diyid" value="5" />
<input type="hidden" name="do" value="2" />

                    	<p>孩子姓名：<input type="text" class="shur" name="name" value=''/><em>*</em></p>
                        <p>家长电话：<input type="text" class="shur" name="tel" value=''/><em>*</em></p>
                        <p>孩子性别：<select class="shur" name="xb" ><option value='男孩'>男孩</option>
<option value='女孩'>女孩</option></select></p>
                        <p>孩子年龄：<select class="shur" name="nl" ><option value='3-5岁'>3-5岁</option>
<option value='6-8岁'>6-8岁</option><option value='9-11岁'>9-11岁</option><option value='12-14岁'>12-14岁</option></select></p> 
                        <p>选择课程：<select class="shur" name="hzxb" ><option value='美术'>美术</option>
<option value='舞蹈'>舞蹈</option><option value='音乐'>音乐</option></select></p>                                              
                        <p>所在区域：<select type="text" class="shur" name="qy" /><option value='滨湖新区'>滨湖新区</option>
    <option value='庐阳区'>庐阳区</option>
 <option value='包河区'>包河区</option>
<option value='政务区'>政务区</option>
<option value='经开区'>经开区</option>
<option value='高新区'>高新区</option>
<option value='蜀山区'>蜀山区</option>
<option value='瑶海区'>瑶海区</option></select>
</p>
<input type='hidden' name='time' id='time' style='width:250px'  class='intxt' value='' />
<input type="hidden" name="dede_fields" value="name,text;time,text;nl,text;kc,text;qy,text;qd,text;xb,text;tel,text" />
<input type="hidden" name="dede_fieldshash" value="3d875d78a9aaef671491ffe3f66b3771" />
                         <p style="padding-left:70px;"><input type="submit" value="提 交" class="nanjiu tj" /><input type="button" value="重 置" class="nanjiu cj" /></p>
                      </form>
                    </div>
                    <div class="yu_r">
                    	<div class="text_xx">您提交的信息我们会严格保密，预约成功后艺朝艺夕的课程
顾问会在2个工作日内与您联系！</div>  
						<p>客服 Q Q：710666777</p>
                        <p>电子邮箱：wanj@ahyzyx.cn</p>
                        <p>联系电话：0551-66667778</p>
                    </div>
                </div>
                    	
          </div>
        </div>
    </div>
 </div>
<!--content-end-->  
@endsection
