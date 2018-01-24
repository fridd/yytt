@extends('wechat.seat.base')

@section('content')
    <ul class="hTit clearfix">
        <li class="li-1">活动时间</li>
        <li>活动名称</li>
        <li>在线选座</li>
    </ul>
    <div class="active-list">
        @foreach ($activities as $activity)
        <dl class="clearfix">
            <dt class="t">{{ $activity->publish_at->toDateString() }}</dt>
            <dt>{{ $activity->name }}</dt>
            <dt>
                @switch ($activity->status)
                    @case(0)
                        <p class="btn">活动结束</p>
                        @break
                    @case(1)
                        {{--
                            if ((int)$db->getCount('order', "info_id=" . $row['id'] .
                        " and state=1 and openid='" . $userInfo["openid"] . "'limit 1")) {
                        --}}
                        <!-- <p class="btn" style="margin-top: 0;"><a href="seat.php?id='. $row['id'] .'">我的预订</a></p> -->
                        <p class="btn" style="margin-top: 0;">
                            <a href="{{ url('wechat/reserve', $activity->id) }}">在线预订</a>
                        </p>
                        @break
                    @default
                        <p class="btn-1">即将开放</p>
                @endswitch
            </dt>
        </dl>
        @endforeach
    </div>
@endsection
