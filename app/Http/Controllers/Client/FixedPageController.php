<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Struct;
use Illuminate\Http\Request;

class FixedPageController extends Controller
{
    public function contact()
    {
        return view("clients.contact");
    }

    public function saveFeedback(Request $request)
    {
        $data = [
            "name" => $request->name,
            "phone" => $request->phone,
            "email" => $request->email,
            "address" => $request->address,
            "message" => $request->message,
        ];
        Contact::create($data);
        return redirect()->back()->with("success","OK");
    }
    public function about(){
        return view("clients.about");
    }
    public function structs(){
        $structs = Struct::all();
        return view("clients.structs",['structs'=>$structs]);
    }
    public function struct($id=1){
        $struct = Struct::find($id);
        return view("clients.struct",['struct'=>$struct]);
    }
}
