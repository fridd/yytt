<?php

namespace App\Http\Middleware;

use EasyWeChat\Foundation\Application;
use Closure;

class WechatOAuth
{
    /**
     * Use Service Container would be much artisan.
     */
    private $wechat;
    /**
     * Inject the wechat service.
     */
    public function __construct()
    {
        $this->wechat = new Application(config('wechat'));
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $scopes = null)
    {
        // $wechat = new Application(config('wechat'));
        $scopes = $scopes ?: config('wechat.oauth.scopes', ['snsapi_base']);

        if (!session()->has('wehchat.oauth_user')) {
            if ($request->has('state') && $request->has('code')) {
                session(['wehchat.oauth_user' => $this->wechat->oauth->user()]);

                return redirect()->to($this->getTargetUrl($request));
            }

            session()->forget('wechat.oauth_user');
            return $this->wechat->oauth->scopes($scopes)->redirect($request->fullUrl());
        }

        return $next($request);
    }

    /**
     * Build the target business url.
     *
     * @param Request $request
     *
     * @return string
     */
    protected function getTargetUrl($request)
    {
        $queries = array_except($request->query(), ['code', 'state']);
        return $request->url().(empty($queries) ? '' : '?'.http_build_query($queries));
    }
}
