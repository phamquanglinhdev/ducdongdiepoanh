<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function categories(){
        return Category::all();
    }
    public function all(){
        return Product::where("active","=",1)->get();
    }
    public function byCategory(Request $request){
        return Product::where("category_id","=",$request->id)->where("active","=",1)->orderBy("name","ASC")->get();
    }
    public function singleProduct(Request $request){
        return Product::find($request->id);
    }
}
