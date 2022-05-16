<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Prologue\Alerts\Facades\Alert;

class ProductController extends Controller
{
    public function index()
    {
        $data = null;
        $products = Product::orderBy("updated_at", "DESC")->where("active", "=", true)->where("active", "=", true)->get();
        foreach ($products as $product) {
            $data .= view("components.product", ["product" => $product]);
        }
        return view("clients.products", ["data" => $data]);
    }

    public function filter(Request $request)
    {
        // $category = [];
        $products = null;
        if (isset($request->categories)) {
            $categories = explode(",", $request->categories);
            $products = Product::orderBy("updated_at", "DESC");
            foreach ($categories as $item) {
                $products = $products->orWhere("category_id", "=", $item);
            }
        }
//        if ($request->type != "empty") {
////            $products=Product::orderBy("updated_at","DESC");
////            foreach ($category as $item){
////                $products = $products->orWhere("category","=",$item);
////            }
//        }
        if(isset($request->limit))
            $products = $products->where("active", "=", true)->limit($request->limit)->get();
        else
            $products = $products->where("active", "=", true)->get();
        $data = null;
        foreach ($products as $product) {
            $data .= view("components.product", ["product" => $product]);
        }
        return $data;
    }

    public function hide($id)
    {
        Product::find($id)->update(["active" => false]);
        return redirect()->back();
    }

    public function hideCategory($id)
    {
        foreach (Product::where("category_id", "=", $id)->get() as $product) {
            $product->update(["active" => false]);
        }
        Category::find($id)->update(["active" => false]);
        return redirect()->back();
    }

    public function showProduct($slug)
    {
        return Product::where("slug", "=", $slug)->first();
    }
}
