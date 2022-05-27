<?php

namespace App\Http\Controllers\Client;

use App\Events\CreateNotification;
use App\Http\Controllers\Controller;
use App\Jobs\sendOrderMail;
use App\Mail\AdminOrder;
use App\Mail\ClientOrder;
use App\Mail\TestQueue;
use App\Models\Option;
use App\Models\Order;
use App\Models\Pack;
use App\Models\Product;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

class CartController extends Controller
{
    public function isEmpty()
    {
        return Pack::where("customer_id", "=", backpack_user()->id)->where("order_id", "=", null)->orderBy("created_at", "DESC")->count() < 1;
    }

    public function showCart()
    {
        if (!$this->isEmpty()) {
            $packs = Pack::where("customer_id", "=", backpack_user()->id)->where("order_id", "=", null)->orderBy("created_at", "DESC")->get();
            $data = view("components.pack", ["packs" => $packs]);
            return view("clients.cart", ["data" => $data]);
        } else {
            return redirect("/tat-ca-san-pham")->with("cart-empty", "none");
        }
    }

    public function chanegQuantity(Request $request)
    {
        if ($this->isEmpty()) {
            return redirect("/tat-ca-san-pham")->with("cart-empty", "none");
        }
        if (isset($request->id) && isset($request->quantity)) {
            if ($request->quantity < 1) {
                $request->quantity = 1;
            }
            Pack::find($request->id)->update(["quantity" => $request->quantity]);
        }
        $packs = Pack::where("customer_id", "=", backpack_user()->id)->where("customer_id", "=", backpack_user()->id)->where("order_id", "=", null)->orderBy("created_at", "DESC")->get();
        $data = view("components.pack", ["packs" => $packs]);
        return $data;
    }

    public function removePack(Request $request)
    {

        if (isset($request->id)) {
            $id = str_replace("r-", "", $request->id);
            if ($id > 0) {
                Pack::find($id)->delete();
            }
        }
        if ($this->isEmpty() && (Route::getCurrentRoute()->getName() == "client.cart")) {
            return "empty";
        }
        $packs = Pack::where("customer_id", "=", backpack_user()->id)->where("customer_id", "=", backpack_user()->id)->where("order_id", "=", null)->orderBy("created_at", "DESC")->get();
        return view("components.pack", ["packs" => $packs])->with("remove", "Xóa thành công");
    }

    public function addToCard($id)
    {
        $product = Product::find($id);
        if (isset($product)) {
            if (Pack::where("product_id", "=", $id)->where("customer_id", "=", backpack_user()->id)->where("order_id", "=", null)->count() == 0) {
                $pack = [
                    'customer_id' => backpack_user()->id,
                    'quantity' => 1,
                    'product_id' => $id
                ];
                Pack::create($pack);
            } else {
                $pack = Pack::where("product_id", "=", $id)->where("order_id", "=", null)->first();
                Pack::where("product_id", "=", $id)->update(["quantity" => ($pack->quantity + 1)]);
            }
        }
    }

    public function buyNow($id)
    {
        $product = Product::find($id);
        if (isset($product)) {
            if (Pack::where("product_id", "=", $id)->where("customer_id", "=", backpack_user()->id)->where("order_id", "=", null)->count() == 0) {
                $pack = [
                    'customer_id' => backpack_user()->id,
                    'quantity' => 1,
                    'product_id' => $id
                ];
                Pack::create($pack);
            } else {
                $pack = Pack::where("product_id", "=", $id)->where("order_id", "=", null)->first();
                Pack::where("product_id", "=", $id)->update(["quantity" => ($pack->quantity + 1)]);
            }
        }
        return redirect("/user/gio-hang");
    }

    public function makeOrder(Request $request)
    {
        $order = [
            "email" => $request->email,
            "name" => $request->name,
            "phone" => $request->phone,
            "address" => $request->address,
            "message" => $request->message,
            "payment_method" => $request->payment_method,
        ];
        $orderCreate = Order::create($order);
        $packs = Pack::where("customer_id", "=", backpack_user()->id)->where("order_id", "=", null)->orderBy("created_at", "DESC")->get();
        foreach ($packs as $pack) {
            $pack->update(["order_id" => $orderCreate->id]);
        }

        Mail::to($orderCreate->email)->send(new ClientOrder($orderCreate));
        $adminMail = Option::where("alias","=","email")->first()->value;
        Mail::to($adminMail)->send(new AdminOrder($orderCreate));
        CreateNotification::dispatch();
//        sendOrderMail::dispatch($orderCreate)->onQueue('high');
//        Test::dispatch();
//        Mail::to("phamquanglinhdev@gmail.com")->send(new TestQueue($orderCreate));
        return redirect("/tat-ca-san-pham")->with("success-order", "Thanh toán thành công");
    }
}
