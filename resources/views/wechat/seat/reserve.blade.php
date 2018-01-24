@extends('wechat.seat.base')

@section('content')
    <div class="order-info">
        <!-- 未选坐位 -->
        {!! Form::open(['url' => 'wechat/reserve', 'onSubmit' => 'return check(this);']) !!}
            <input type="hidden" name="seats">
            <input type="hidden" name="activity_id" value="{{ $id }}">
            <input type="hidden" name="openid" value="{{ $user->id }}">
            <input type="hidden" name="name" value="{{ $user->name }}">
            <input type="hidden" name="nickname" value="{{ $user->nickname }}">
            <div class="t-box">
                <div class="form-group">
                    <label class="control-label">学员姓名：</label>
                    <input type="text" name="username" class="form-control" placeholder="请输入您孩子的姓名" />
                </div>
                <div class="form-group">
                    <label class="control-label">联系电话：</label>
                    <input type="number" name="phone" class="form-control" placeholder="请输入您的联系电话" />
                </div>
            </div>
            <div class="t-box clearfix">
                <button class="btn" type="submit">提交订单</button>
            </div>
            <div class="tips clearfix">
                <p class="txt">温馨提示：一次最多选 {{ $activity->max_seat }} 个座位</p>
                <ul id="selected-seats"></ul>
                <p class="p"><span id="total"></span>元</p>
            </div>
            <ul class="thd">
                <li><img src="{{ asset('libs/wechat/seat/images/icon_01.jpg') }}"><em>可选</em></li>
                <li><img src="{{ asset('libs/wechat/seat/images/icon_02.jpg') }}"><em>已选</em></li>
                <li><img src="{{ asset('libs/wechat/seat/images/icon_03.jpg') }}"><em>已定</em></li>
            </ul>
            <div class="s-box">
                <p class="stage"><img src="{{ asset('libs/wechat/seat/images/stage.jpg') }}"><em>艺朝艺夕舞台</em></p>

                <div id="seat-map">
                    <div class="rowBar"></div>
                </div>
            </div>
        {!! Form::close() !!}
    </div>
@endsection

@section('js')
{!! Html::script('libs/wechat/seat/jquery.seat-charts.js') !!}
{!! Html::script('libs/wechat/seat/common.js') !!}
<script type="text/javascript">
    //生成座位并赋予状态
    createdSeat({{ $activity->max_seat }}, '{{ $seatsstr }}', {{ $activity->price }}, "{{ asset('libs/wechat/seat/images/icon_02.jpg') }}");
</script>
@endsection
