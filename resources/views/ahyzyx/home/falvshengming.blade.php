@extends('ahyzyx.layouts.index')
@section('content')
<!--banner-start-->  
 <!--content-start-->
 <div class="zy_cent">
 	<div class="box_1005">
    	<p class="dqwz" style="margin-left:26px;overflow:hidden; float:none"><a href='http://www.ahyzyx.com/'>主页</a> > <a href="{{asset('ahyzyx/Contact')}}">联系我们</a> > <a href="{{asset('ahyzyx/falvshengming')}}">法律声明</a> > </p>
        <div class="ban_ban">
        
        	<img src="{{asset('ahyzyx/images/Contactbj.png')}}" width="988" />
            
        </div>
      	<div class="bati lx">
        	<span class="min_c">法律声明</span>
        	<ul>
            
            
            	<li   ><a href="{{asset('ahyzyx/falvshengming')}}">法律声明</a></li>
            	<li   ><a href="http://job.ahyzyx.com">人才招聘</a></li>
            	<li   ><a href="{{asset('ahyzyx/Contact')}}">联系我们</a></li>
            </ul>
        </div>
        <div class="qh_neir">
        	<div class="pic_996"><br>
            	<p><div style="text-align: center;">
	<strong><span style="font-size:14px;">关于保护艺朝艺夕客户隐私的申明</span></strong><br />
	&nbsp;</div>
<strong>致：广大客户</strong><br />
<br />
艺朝艺夕在服务过程中可能会收集到您的个人信息，本着对个人隐私的尊重和保护的原则，我们制定了一系列关于如何收集、使用、存储、披露个人信息的制度并做出如下声明。<br />
<br />
<strong>一、个人信息的收集</strong><br />
<br />
当您与本网站进行交互行为或使用艺朝艺夕相关的APP、即时通讯工具、网上商城等相关在线服务时，可能会要求提供您的个人信息，我们会通过善意的方式来使用这些资料以便为用户提供更好的服务。<br />
<br />
<strong>（一）我们收集您的两类信息：</strong><br />
<br />
1.与个人身份无关的信息<br />
当用户访问我们的网站或使用其他在线服务时，我们会收集到诸如用户的IP地址、操作平台、访问网页、访问顺序等与个人身份无关的信息。我们会利用这些信息来优化在线服务和广告宣传。<br />
<br />
2.有关个人身份的信息<br />
当用户使用艺朝艺夕的某项在线服务时，可能会被要求提供相关个人信息。例如在线报名，会收集用户的姓名、年龄、号码、电子邮箱等信息。我们收集这类个人信息是为了让用户能够体验到更便捷更满意的服务。<br />
<br />
<strong>（二）&nbsp; </strong><strong>我们收集您信息的途径：</strong><br />
<br />
1.您提供的信息<br />
您注册账户或使用我们的服务时提供的个人信息。例如活动报名填写的相关表单、网上商城填写的个人信息等等。当然，您可以拒绝提供这些信息，也就无法享受相关服务。<br />
&nbsp;<br />
2.我们获取的您的信息<br />
（1）您使用我们服务时，系统可能会通过cookies、web beacon或其他方式自动采集一些技术信息，包括：<br />
►设备或软件信息，例如您的移动设备、网页浏览器或您用于接入我们的服务的其他程序所提供的配置信息、您的IP地址和您的移动设备所用的版本和设备识别码；<br />
►您通过我们的服务分享的内容所包含的信息（元数据），例如拍摄或上传的共享照片或录像的日期、时间或地点等。<br />
&nbsp;<br />
（2）位置信息指您开启移动终端设备定位功能并使用我们基于位置提供的相关服务时，我们收集的有关您位置的信息，包括：&nbsp;<br />
►您通过具有定位功能的移动设备使用我们的服务时，我们通过GPS等方式收集的您的地理位置信息；&nbsp;<br />
►您或其他用户提供的包含您所处地理位置的实时信息，例如您提供的账户信息中包含的您所在地区信息，您或其他人上传的显示您当前或曾经所处地理位置的共享信息。<br />
<br />
（3）您可以通过关闭定位功能随时停止我们对您的地理位置信息的收集。<br />
&nbsp;<br />
<strong>二、</strong><strong>个人信息的使用</strong><br />
<br />
1.为您实时提供相关服务。<br />
2.根据您的个人信息进行用户识别、提供特定的服务。例如您在网上提供的报名信息，我们会根据它来通知您报名时间和地点，为您提供咨询及后续服务。<br />
3.为您提供个性化的服务。例如，为您推送与您相关的信息或提供有针对性的服务，而不是普遍性的广告。<br />
4.用于其他相关服务。例如，我们会根据您在报名或其他表单中提供的邮箱信息向您发送满意度调查等邮件。<br />
5.评估我们的服务效果和广告效果，以便改进。<br />
&nbsp;<br />
<strong>三、个人信息的存储和保护</strong><br />
<br />
我们非常重视用户的信息安全，因此会使用各种安全技术措施，以防信息的丢失、不当使用、未经授权阅览或披露。但由于技术的限制以及风险防范的局限，即便我们已经尽量加强安全措施，也无法始终保证信息百分之百的安全。您需要了解，您所使用的系统和通讯网络，有可能发生在我们可控范围外的风险。<br />
&nbsp;<br />
<strong>四、个人信息的披露</strong><br />
<br />
除以下情形外，未经您同意，我们不会与任何第三方分享您的个人信息：<br />
1.您授权或同意我们披露的。例如，您在网上商城提供的个人姓名、号码、地址等信息，经过您同意，我们会把信息提供给第三方运输公司，以便为您提供一些特定的服务或将物品交送与您。<br />
2.遵守法院命令、其他法律程序的规定或政府的强制要求披露个人信息。<br />
&nbsp;<br />
<strong>五、未成年人使用我们的服务</strong><br />
<br />
我们建议父母或监护人仔细阅读本声明，并认真指导未成年人使用我们的在线服务，建议未成年人在提交的个人信息之前征求父母或监护人的同意。我们将根据国家相关法律法规的规定保护未成年人的隐私。<br />
&nbsp;<br />
<strong>六、变更</strong><br />
<br />
我们会适时修订本声明的条款，修订内容构成本声明的一部分。<br />
特此声明！
<div style="text-align: right;">
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;安徽艺朝艺夕教育咨询有限公司<br />
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2017年8月23日 &nbsp;&nbsp;</div>
</p>
            </div>
        </div>
    </div>
 </div>
<!--content-end-->  
@endsection 
  