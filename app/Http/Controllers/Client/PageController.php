<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Page;

class PageController extends Controller
{
    public function show($slug){
        $page = Page::where("slug","=",$slug)->first();
        return view("clients.page",["page"=>$page]);
    }
}
