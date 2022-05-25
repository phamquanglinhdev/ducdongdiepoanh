<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Pack;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function showCart()
    {
        $packs = Pack::where("customer_id","=",backpack_user()->id)->where("order_id","=",null)->orderBy("created_at","DESC")->get();
        $data =  view("components.pack",["packs"=>$packs]);
        return view("clients.cart",["data"=>$data]);
    }
    public function chanegQuantity(Request $request){
        if(isset($request->id)&&isset($request->quantity)){
            if($request->quantity<1){
                $request->quantity=1;
            }
            Pack::find($request->id)->update(["quantity"=>$request->quantity]);
        }
        $packs = Pack::where("customer_id","=",backpack_user()->id)->where("order_id","=",null)->orderBy("created_at","DESC")->get();
        $data =  view("components.pack",["packs"=>$packs]);
        return $data;
    }
    public function addToCard($id)
    {
        $product = Product::find($id);
        if (isset($product)) {
            if (Pack::where("product_id", "=", $id)->where("order_id", "=", null)->count() == 0) {
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
    public function makeOrder(Request $request){
        return $request;
    }
}
