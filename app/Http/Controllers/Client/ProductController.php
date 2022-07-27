<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Prologue\Alerts\Facades\Alert;

class ProductController extends Controller
{
    public function index($category=null)
    {
        $find = Category::find($category);
        if(($category==null)||($find==null)){
            $products = Product::orderBy("updated_at", "DESC")->where("active", "=", true)->where("active", "=", true)->limit(6)->get();
        }else{
            $products = Product::orderBy("updated_at", "DESC")->where("category_id","=",$category)->where("active", "=", true)->where("active", "=", true)->limit(6)->get();
        }
        $data = null;


        $categories = Category::where("active","=",true)->get();
        foreach ($products as $product) {
            $data .= view("components.product", ["product" => $product]);
        }
        return view("clients.products", ["data" => $data,"categories"=>$categories,'own'=>$category]);
    }

    public function filter(Request $request)
    {
        // $category = [];
        $products = null;
        if (isset($request->categories)) {
            $categories = explode(",", $request->categories);
            $products = Product::orderBy("updated_at", "DESC");
//            foreach ($categories as $item) {
//                $products = $products->orWhere("category_id", "=", $item);
//            }
            $products = $products->where(function ($query) use ( $categories){
                foreach ($categories as $item){
                    $query->orWhere("category_id","=",$item);
                }
            });
        }else{
            $products = Product::orderBy("updated_at", "DESC");
        }
        $page = $request->limit;
        $start = ($page-1)*6;
        $data=null;
        $products = $products->where("active", "=", true)->offset($start)->limit(6)->get();
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
        $product =Product::where("slug", "=", $slug)->first();
        return view("clients.product",['product'=>$product]);
    }

    public function search(Request $request){
        $products = Product::where('name', 'like', '%' . $request->get('q') . '%')->get();
        return response()->json($products);
    }
}
