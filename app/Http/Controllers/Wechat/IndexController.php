<?php

namespace App\Http\Controllers\Wechat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Log;
use EasyWeChat\Foundation\Application;
use EasyWeChat\Payment\Order;

use App\Models\Wechat\SeatOrder;

class IndexController extends Controller
{
    /**
     * Wechat App
     * @var [type]
     */
    private $app;

    public function __construct()
    {
        $this->app = new Application(config('wechat'));
	}


    /**
     * 微信管理主界面
     * @return [type] [description]
     */
    public function index()
    {
        return view('admin.wechat.template');
    }

	public function serve()
	{
		$server = $this->app->server;

		$server->setMessageHandler(function ($message) {
			switch ($message->MsgType) {
				case 'event':
					if ($message->Event == 'subscribe') {
						return '欢迎您关注张寅微信公众号。衷心感谢您的订阅！';
					} else if ($message->Event == 'unsubscribe') {
						return '希望您能留下反馈意见，我们会持续改进以提升我们的服务，并能再次关注张寅微信公众号！';
					}
				case 'text':
					return '已收到您发送的文字消息';
				case 'image':
					return '已收到您发送的图片消息';
				case 'voice':
					return '已收到您发送的语音消息';
				case 'video':
					return '已收到您发送的视频消息';
				case 'location':
					return '已收到您发送的坐标消息';
				case 'link':
					return '已收到您发送的链接消息';
				default:
					return '已收到您发送的消息';
			}
		});

		return $server->serve();
    }

    /**
     * 微信支付
     * @return [type] [description]
     */
    public function pay()
    {
        dd(session()->get('wechat_order'));
        $order = new Order();
        $result = $payment->prepare($order);
        if ($result->return_code == 'SUCCESS' && $result->result_code == 'SUCCESS')
        {
            //生产那个订单后的逻辑
            \Log::info('生成订单号..'.$data->order_guid);
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
