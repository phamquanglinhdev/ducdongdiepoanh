<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;


class SendPush extends Controller
{
    public function sending()
    {
        $fields['included_segments'] = ['Subscribed Users'];
        $message = 'Xin chào, tôi là vui vẻ';
        return (new \Ladumor\OneSignal\OneSignalManager)->sendPush($fields, $message);
    }
}
