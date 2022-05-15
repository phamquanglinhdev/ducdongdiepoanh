<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Prologue\Alerts\Facades\Alert;

class ProductController extends Controller
{
    public function index(){
        $products=Product::orderBy("updated_at","DESC")->where("active","=",true)->get();
        return $products;
    }
    public function hide($id){
        Product::find($id)->update(["active"=>false]);
        return redirect()->back();
    }
    public function hideCategory($id){
        foreach (Product::where("category_id","=",$id)->get() as $product){
            $product->update(["active"=>false]);
        }
        Category::find($id)->update(["active"=>false]);
        return redirect()->back();
    }
    public function showProduct($slug){
        return Product::where("slug","=",$slug)->first();
    }
}
