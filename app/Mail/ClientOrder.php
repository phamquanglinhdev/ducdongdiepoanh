<?php

namespace App\Mail;

use App\Models\Order;
use App\Models\Pack;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ClientOrder extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;


    private Order $order;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( Order $order)
    {

        $this->order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $pdf = Pdf::loadView("mails.printOrder", ["order" => $this->order, "packs" => Pack::where("order_id", "=", $this->order->id)->get()]);
        return $this->from(env("MAIL_USERNAME"), "Đồ Đồng Oanh Điệp")
            ->view("mails.order")
            ->attachData($pdf->output(), "DH_".$this->order->id."_".$this->order->email.".pdf")
            ->subject("Thông tin đơn hàng #" . $this->order->id);
    }
}
