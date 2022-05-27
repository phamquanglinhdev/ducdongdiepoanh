<?php

namespace App\Jobs;

use App\Mail\AdminOrder;
use App\Mail\ClientOrder;
use App\Models\Option;
use App\Models\Order;
use App\Models\Pack;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class sendOrderMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    public Order $order;

    /**
     * @param $pdf
     * @param $order
     */
    public function __construct($order)
    {

        $this->order = $order;
    }


    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
//        $order=$this->order;
//        $pdf = Pdf::loadView("mails.printOrder", ["order" => $order, "packs" => Pack::where("order_id", "=", $order->id)->get()]);
//        Mail::to($order->email)->send(new ClientOrder($pdf,$order));
//        $adminMail = Option::where("alias","=","email")->first()->value;
//        Mail::to($adminMail)->send(new AdminOrder($pdf,$order));
    }
}
