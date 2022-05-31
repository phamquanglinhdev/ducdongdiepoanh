<?php

namespace App\Notifications;

use App\Models\Order;
use App\Models\Pack;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\SlackMessage;
use Illuminate\Notifications\Notification;

class HasOrder extends Notification implements ShouldQueue
{
    use Queueable;

    private Order $order;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    public function via()
    {
        return ["slack"];
    }
    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     * @return SlackMessage
     */
    public function toSlack($notifiable)
    {
        $info = [];
        $info[] = 'Có đơn hàng mới';
        $info[] = "Họ và tên khách hàng :" . $this->order->name;
        $info[] = "Số điện thoại :" . $this->order->phone;
        $info[] = "Địa chỉ email:" . $this->order->email;
        $info[] = "Địa chỉ giao hàng :" . $this->order->address;
        if ($this->order->message != null) {
            $info[] = "Lời nhắn :\"" . $this->order->address . "\"";
        }
        $content = [];
        $content[] = "Mã vận đơn:#" . $this->order->id;
        foreach ($this->order->Packs()->get() as $pack) {
            $content[] = $pack->Product()->first()->name . " (" . number_format($pack->Product()->first()->price) . "đ ) x" . $pack->quantity;
        }
        $content[] = "Tổng giá trị:" . number_format(Pack::Total($this->order->Packs()->get())) . "đ";
        return (new SlackMessage())
            ->from("Đúc đồng Điệp Oanh")
            ->image("https://kenh14cdn.com/2019/9/27/566226151661511044021668004432122225985389n-1569234596911848541502-1569517951952686128625.jpg")
            ->content(implode("\n", $info))
            ->attachment(function ($at) use ($content) {
                $at->title("Thông tin chi tiết")
                    ->content(
                        implode("\n", $content)
                    );
            })->success();
    }

    /**
     * Get the array representation of the notification.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
