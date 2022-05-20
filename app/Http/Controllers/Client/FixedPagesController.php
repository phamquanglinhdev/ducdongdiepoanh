<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FixedPagesController extends Controller
{
    public function about(){
        return view("clients.about");
    }
    public function contact(){
        return view("clients.contact");
    }
}
