@extends('wechat.seat.base')

@section('content')
    <div class="order-info">
        <div class="tips clearfix">
            <p class="txt">您的预定信息：</p>
            <p class="txt">订单号： {{ $order->order_id }}</p>
            <p class="txt">姓名： {{ $order->username }}</p>
            <p class="txt">电话： {{ $order->phone }}</p>
            <p class="txt">座位信息： {{ str_replace(',', '座, ', str_replace('_', '排', $order->seats)) }}座</p>
            <p class="txt">支付状态：
                @if ($order->status == 1)
                <span style="color: #2aa144;">已支付</span>
                @else
                <span style="color: #f00;">未支付</span>
                @endif
            <p>
            <p class="txt">订单时间： {{ $order->created_at->toDateString() }}</p>
        </div>
    </div>
@endsection
