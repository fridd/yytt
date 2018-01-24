<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    	<link rel="shortcut icon" href="{{ asset('images/yzyx.ico') }}"/>
        <title>{{ config('app.name') }}</title>
        <link rel="stylesheet" href="{{ asset('/css/login.css') }}">
    </head>
    <body>
        <div class="login-background-img">
            <img src="{{ url('/images/admin/login_bg02.jpg') }}" id="login-bgImg">
        </div>

        <div class="login_header">
        	<div class="login_top_bar">
        	</div>
            <div class="main_content">
                <span class="logo"></span>
            </div>
        </div>

        <div class="login_content main_content">
            <!-- 登录框 开始 -->
            <div class="login_iframe">
                <div class="header">登录系统</div>
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                	<table class="lui_login_form_table">
                		<tbody>
                            <tr>
                    			<td colspan="2" class="lui_login_message_td">
                    				<div class="lui_login_message_div">
                    				</div>
                    			</td>
                    		</tr>
                    		<tr>
                    			<td class="lui_login_input_title">用户名：</td>
                    			<td class="lui_login_input_td">
                    				<div class="lui_login_input_div">
                    					<i class="icon_user"></i>
                                        <input type="email" name="email" class="lui_login_input_username" onfocus="this.select();" value="" placeholder="用户名" autocomplete="off"><i class="icon_del"></i>
                    				</div>
                    			</td>
                    		</tr>
                    		<tr>
                    			<td class="lui_login_input_title">密　码：</td>
                    			<td class="lui_login_input_td">
                    				<div class="lui_login_input_div">
                    					<i class="icon_pwd"></i>
                                        <input type="password" name="password" class="lui_login_input_password" placeholder="密码" autocomplete="off"><i class="icon_del"></i>
                    				</div>
                    			</td>
                    		</tr>
                    		<tr>
                    			<td class="lui_login_button_td" colspan="2">
                    				<a href="javascript:document.getElementsByName('btn_submit')[0].click();">
                    					<div class="lui_login_button_div_l">
                    	                	<div class="lui_login_button_div_r">
                	                         	<div class="lui_login_button_div_c">登录</div>
                    	                    </div>
                    	                </div>
                                 	 </a>
                    			</td>
                    		</tr>
                	       </tbody>
                    </table>
                    <input type="submit" style="border: 0px; width: 0px; height: 0px; background: none;" name="btn_submit">
                </form>
                <div class="form_bottom"></div>
            </div>
            <!-- 登录框 结束 -->
            <div class="login_footer">
                <p>Copyright © 2012-2017 {{ config('app.name') }} 版权所有</p>
            </div>

        </div>
        
        <div class="tipsClass" style="left: 462px; top: 298.359px;">大写锁定已打开</div>

        <script type="text/javascript">
            //添加提示
            $('body').append('<div class="tipsClass">大写锁定已打开</div>');
        </script>
    </body>
</html>
