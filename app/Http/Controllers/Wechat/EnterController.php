<?php

namespace App\Http\Controllers\Weixin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Weixin\Enter\Classes;

class EnterController extends Controller
{
    public function getclass(Request $request)
    {
        if (Classes::where('phone', $request->phone)->count() > 0) {
            return response()->json(['message' => '您已领取过试听课，请勿重复申请。', 'code' => 400], 400);
        }

        $result = Classes::create($request->all());
        if ($result) {
            return response()->json(['message' => '领取试听课成功。', 'code' => 0], 200);
        }
        return response()->json(['message' => '领取试听课失败。', 'code' => 400], 400);
    }
}
