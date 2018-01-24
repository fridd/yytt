<?php

namespace App\Http\Controllers\Wechat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use EasyWeChat\Foundation\Application;
use EasyWeChat\Payment\Order;

use App\Models\Wechat\SeatActivity;
use App\Models\Wechat\SeatOrder;

class SeatController extends Controller
{
    /**
     * Wechat App option
     * @var [type]
     */
    private $options = [];

    /**
     * Wechat App
     * @var [type]
     */
    private $app;

    /**
     * 活动
     * @var [type]
     */
    private $activity;

    /**
     * wechat user
     * @var [type]
     */
    private $user;

    /**
     * 订单
     * @var [type]
     */
    private $order;

    public function __construct(SeatActivity $activity, SeatOrder $order)
    {
        $this->activity = $activity;
        $this->order = $order;
    }

    /**
     * 选座页面
     * @return [type] [description]
     */
    public function seat()
    {
        $user = session()->get('wechat.oauth_user');
        $activities = $this->activity->oldest('sort')->paginate(10);
        return view('wechat.seat.seat', compact('activities', 'user'));
    }

    /**
     * 预订座位页面
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function reserve($id)
    {
        $user = session()->get('wechat.oauth_user');

        // 如果已选座位跳转到我的订单页面
        $order = $this->order
                    ->where('activity_id', $id)
                    ->where('openid', $user->id)->first();

        if (isset($order)) {
            if ($order->status == 0) {
                return redirect('/wechat/seatpay?orderid='.$order->order_id);
            }

            return view('wechat.seat.myorder', compact('order', 'user'));
        }
        $activity = $this->activity->findOrFail($id);

        $seats = $this->order->where('activity_id', $id)->pluck('seats');

        $seatsstr = '';

        if (isset($seats)) {
            foreach ($seats as $key => $value) {
                $seatsstr = $value . ',' . $seatsstr;
            }
        }

        return view('wechat.seat.reserve', compact('id', 'activity', 'user', 'seatsstr'));
    }

    /**
     * 我的订单
     * @return [type] [description]
     */
    public function myorder()
    {
        $user = session()->get('wechat.oauth_user');

    }

    /**
     * 请求预订座位
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function selected(Request $request)
    {
        $datas = $request->all();
        $datas = array_add($datas ,'order_id', time().mt_rand());
        $datas = array_add($datas, 'num', count(explode(',', $request->get('seats'))));
        $datas = array_add($datas, 'status', 0);

        $result = $this->order->create($datas);
        if ($result) {
            // 创建订单成功，跳转支付
            return redirect('/wechat/seatpay?orderid='.$result->order_id);
        }

        return redirect('/wechat/myorder');
    }

    /**
     * 微信支付
     * @return [type] [description]
     */
    public function seatpay(Request $request)
    {
        $user = session()->get('wechat.oauth_user');
        $orderid = $request->orderid;

        $seatOrder = $this->order->where('order_id', $orderid)->first();
        $activity = $this->activity->find($seatOrder->activity_id);

        $attributes = [
            'trade_type'       => 'JSAPI', // JSAPI，NATIVE，APP...
            'body'             => $activity->name,
            'detail'           => $activity->name,
            'out_trade_no'     => $orderid,
            'total_fee'        => 1, // 单位：分
            'notify_url'       => url('/wechat/notify'), // 支付结果通知网址，如果不设置则会使用配置里的默认地址
            'openid'           => $user->id, // trade_type=JSAPI，此参数必传，用户在商户appid下的唯一标识，
            // ...
        ];

        $order = new Order($attributes);

        $app = new Application(config('wechat'));
        $payment = $app->payment;

        $result = $payment->prepare($order);
        if ($result->return_code == 'SUCCESS' && $result->result_code == 'SUCCESS')
        {
            //生产那个订单后的逻辑
            \Log::info('生成订单号..'.$orderid);
            //这一块是以ajax形式返回到页面上。
            //用户的体验就是点击【确认支付】，验证码以弹层页面出来了（没错，还需要一个好用的弹层js）。
            $ajax_data=[
                'html'         =>  json_encode(\QrCode::size(250)->generate($result['code_url'])),
                'out_trade_no' =>  $data->order_guid,
                'price'        =>  $data->price
            ];
            return $ajax_data;
        }else{
            return back()->withErrors('生成订单错误！');
        }
        return $orderid;
    }
}
