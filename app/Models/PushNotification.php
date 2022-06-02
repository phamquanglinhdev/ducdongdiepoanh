<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class PushNotification extends Model
{
    use HasFactory;
    public static function sendPushOrder(Order $order)
    {
        $title = "Đơn hàng mới, mã vận đơn #".$order->id;
        $content = "Đơn hàng của ".$order->name.".Địa chỉ email: $order->email".".Số điện thoại:".$order->phone;
        if($order->message!=null){
            $content.=".Lời nhắn : ".$order->message;
        }
        $url = route("show-order",$order->id);
        $devices =Device::all();
        $baseUrl = "http://xdroid.net/api/message";
        foreach ($devices as $device){
            $response = Http::get($baseUrl,[
                'k'=>$device->token,
                't'=>$title,
                'c'=>$content,
                'u'=>$url,
            ]);
        }
    }
}
