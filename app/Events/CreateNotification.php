<?php

namespace App\Events;

use GuzzleHttp\Client;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;

class CreateNotification
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        $baseUrl = "http://xdroid.net/api/message";
        $response = Http::get($baseUrl,[
            'k'=>'k-d91c16ae4ea0',
            't'=>'Thông báo từ Dodongdiepoanh.com',
            'c'=>'...',
            'u'=>env("APP_URL"),
        ]);
        return new PrivateChannel('push');
    }
}
