@extends('layouts.app')

@section('content')
<div class="about-section">
    <div class="about">
        <div class="about-title">
            @include('home.component.sidebar')
        </div>
        <div class="about-content">
            <div class="address">
                首页 > 联系我们 > <span>{{ $title }}</span>
            </div>
            <div class="about-txt messages">
                <div class="messages-img">
                    {{-- <img src="{{ asset('images/messages-img_03.png') }}"> --}}
                    <img src="{{ asset('images/yzyxjyjtl.jpg') }}">
                </div>
                <h3>请填妥下列登记表格</h3>
                <form action="{{ isset($model)?'':url('/messages/info') }}" method="POST" id="messagesForm">
                    @if (!isset($model))
                    {{ csrf_field() }}
                    <input type="hidden" name="token" value="{{ $token }}">
                    <input type="hidden" name="city" id="myCity">
                    <div class="me-form-row">
                        <label>留言类型</label>
                        <select class="me-type" name="message_type_id">
                             @if (count($types)>0)
                                @foreach ($types as $type)
                                    <option value="{{ $type->id }}">{{ $type->type }}</option> 
                                @endforeach 
                            @else
                                <option value="">留言类型未配置,请联系管理员进行配置</option>          
                            @endif
                        </select>
                    </div>
                    @else
                    <div class="me-form-row">
                        <label>留言类型</label>
                        <input type="text" value="{{ $model->message_type_id }}">
                    </div>                    
                    @endif
                    <div class="me-form-row">
                        <label>姓名</label>
                        <input type="text" name="name" class="fname" placeholder="请输入您的姓名" required="required" value="{{ isset($model) ? $model->name : '' }}">
                    </div>
                    <div class="me-form-row">
                        <label>联系方式</label>
                        <input type="text" name="tel" class="ftel" placeholder="请输入您的联系电话" required="required" value="{{ isset($model) ? $model->tel : '' }}">
                    </div>                    
                    <div class="me-form-row">
                        <label>邮箱</label>
                        <input type="email" name="email" class="femail" placeholder="请输入您的邮箱" required="required" value="{{ isset($model) ? $model->email : '' }}">
                    </div>
                    <div class="me-form-row" id="city">
                        <label>所属地区</label>
                        @if (!isset($model))
                        <select class="prov1" id="prov"></select> 
                        <select class="prov2" id="cheng" disabled="disabled"></select>
                        @else
                        <input type="text" value="{{ $model->city }}">                        
                        @endif                   
                    </div>                    
                    <div class="me-form-row">
                        <label>地址</label>
                        <input type="text" name="address" class="faddress" placeholder="请输入您的地址" required="required" value="{{ isset($model) ? $model->address : '' }}">
                    </div>  
                    <div class="me-form-row cont-row">
                        <label>留言内容</label>
                        <textarea placeholder="请输入您的留言内容" name="content" class="fcontent" required="required">{{ isset($model) ? $model->content : ''}}</textarea>
                    </div>
                    @if (!isset($model))
                    <div class="me-form-row">
                        <label>验证码</label>
                        <input class="yzm" type="text" name="captcha" class="fcaptcha" placeholder="请正确输入验证码" required="required">
                        <a onclick="javascript:re_captcha();" class="yzm-i">
                            <img src="{{captcha_src()}}"  alt="验证码" title="刷新图片" id="c2c98f0de5a04167a9e427d883690ff6" border="0">
                        </a>                        
                    </div>
                    <div class="me-form-sub">
                        <button type="button" class="sub" id="myBtn">
                            <span>点击提交</span>  
                        </button>
                    </div>
                    @endif                                                                
                </form>
            </div>
        </div>
    </div>
</div>
<div style="clear: both;"></div>
@endsection
@section('js')
<script src="{{ asset('libs/city/js/city.min.js') }}"></script>
<script src="{{ asset('libs/city/js/jquery.cityselect.js') }}"></script>
<script>
// 城市插件调用
$("#city").citySelect({prov:"安徽", city:"合肥"});


// 点击刷新验证码
function re_captcha() {
    $url = "{{ captcha_src() }}";
    $url = $url + "/" + Math.random();
    document.getElementById('c2c98f0de5a04167a9e427d883690ff6').src=$url;
}

$(function(){
    //  表单提交
    var $form = $('#messagesForm'),
    $url = $form.attr('action'),
    $btn = $('#myBtn');
    $btn.click(function(){
        // 前台验证
        $('#myCity').val($('#prov').val()+'---'+ $('#cheng').val());
        var name = $('.fname').val(),
        tel = $('.ftel').val(),
        address = $('.faddress').val(),
        email = $('.femail').val(),
        content = $('.fcontent').val(),
        yzm = $('.yzm').val(),
        telReg = /^1[0-9]{10}$/, // 手机号正则
        emailReg = /^[a-zA-Z0-9_-]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)+$/; // 邮箱正则
        if (tel !== '' && address !== '' && name !== '' && email !== '' && content !== '' && yzm !== '') {
            if (!telReg.test(tel)) {
                alert('无效的手机号！');
                return false;
            }
            if(!emailReg.test(email)){
                alert('无效的邮箱！');
                return false;
            }
        }else{
            alert('还有信息未填写。');
            return false;
        }

        $data = $form.serialize();
        $.post($url, $data, function(data){
            // 如果成功获取到后台传递的数据
            alert(data.info);  // 提示数据信息
            re_captcha();  // 每次点击都会重新刷新验证码
        });
        return false;
    });
})

</script>
@endsection