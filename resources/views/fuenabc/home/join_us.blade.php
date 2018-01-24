@extends('fuenabc.layouts.index')
@section('content')
  <div id="bd">
    <div class="cur">
      <div class="wp">您的当前位置：<a href='http://www.fuenabc.com/'>首页</a> > <a href='/a/kehuanli/'>校区环境</a> > <a href='/a/kehuanli/yidongAPP/'>师资力量</a> >  </div>
    </div>
    <div class="case-article">
      <div class="case-article-bg">
        <div class="wp pr">
          <div class="case-logo"><!--<img src="/skin/images/14429937758428.png" alt="14429937758428.png">--></div>
          <h1 style="color:#000000">人才招聘</h1>
          <div class="tc"> <h1 align="center">
              English&nbsp; Teachers</h1>
            &nbsp;<br />
            <span style="font-size:14px;">Employment package<br />
&nbsp;<br />
&bull; Salaries starting from 13,000 to 15000rmb per month<br />
&nbsp;If you are brilliant，the wages could be much higher.<br />
&bull; less than 25 teaching hours and less than 15 office hours per week<br />
&bull; 2 Days off per week<br />
&bull; Paid national holiday<br />
&bull; Visa: responsible for work visa<br />
&bull; 5000rmb flight allowance (paid upon contract completion)<br />
&bull; Comprehensive health Insurance and business insurance<br />
&bull; Accommodation assistance plus Accommodation allowance<br />
&bull; On-going professional teacher development and training programs<br />
&bull; 12 months contract<br />
&nbsp;<br />
Qualifications<br />
&bull; A genuine interest in children, teaching, and professional development<br />
&bull; Open-minded, an adventurous spirit, and professional flexibility<br />
&bull; bachelor&#39;s degree from an accredited university<br />
&bull; Native English speaker preferred<br />
&bull; Passport issued by the USA, Canada, the UK, Ireland, Australia, and New Zealand preferred<br />
&bull; At lease two years teaching experience preferred<br />
&bull; Experience traveling internationally and/or working abroad preferred<br />
&nbsp;<br />
Responsibilities<br />
&bull; Planning and delivering lessons to young learners (ages 3-14)<br />
&bull; Using electronic media and courseware to teach English efficiently and effectively<br />
&bull; Evaluating student progress and providing ongoing guidance for improvement<br />
&bull; Participating in social activities with students organized by your school<br />
&bull; Maintaining regular office hours<br />
&bull; Location: Hefei, Anhui province, China<br />
&bull; Working hours: 8:00 to 18:00 or 15:30 to 20:30<br />
&nbsp;<br />
​V-Ron International English provides the children of China with the most advanced an innovative teaching philosophy. The original materials imported by world&rsquo;s largest educational publishing company Pearson.<br />
<br />
咨询电话：</span><span style="font-family: inherit; font-size: 14px; line-height: 21px; white-space: pre-wrap;">0551-63520985</span><br />
            <br />
            <br />
            <form action="/plus/diy.php" class="smart-green" enctype="multipart/form-data" method="post">
              <center><h1>
                  人才招聘 <span>请简单自我介绍</span></h1></center>
              <input name="action" type="hidden" value="post" /> <input name="diyid" type="hidden" value="2" /> <input name="do" type="hidden" value="2" /> <input name="dede_fields" type="hidden" value="js,multitext;zw,select" /><input name="dede_fieldshash" type="hidden" value="5edad6190cae64281f4b884d08b94f61" />
              <table cellpadding="0" cellspacing="1" style="width:97%;">
                <tbody>
                <tr>
                  <td align="right" valign="top">
                  </td>
                  <td>
                    <textarea id="js" name="js" style="width:90%;height:80"></textarea></td>
                </tr>
                <tr>
                  <td align="right" valign="top">
                    &nbsp;</td>
                  <td>
                    <select name="zw" style="width:150px"><option value="0">应聘职位</option><option value="英语老师">英语老师</option><option value="实习校长">实习校长</option><option value="课程顾问">课程顾问</option><option value="班主任">班主任</option><option value="市场专员">市场专员</option></select></td>
                </tr>
                </tbody>
              </table>
              <div align="center" style="height:30px;padding-top:10px;">
                <input class="button" name="submit" type="submit" value="提 交" /> &nbsp; <input class="button" name="reset" type="reset" value="重 置" /></div>
            </form>
          </div>
        </div>
      </div>
      <div class="case-back"><a href="{{ asset('fuenabc/xiaoquhuanjing') }}">返回列表</a></div>
    </div>
  </div>
  <!-- end #bd -->
  <div class="c"></div>




@endsection