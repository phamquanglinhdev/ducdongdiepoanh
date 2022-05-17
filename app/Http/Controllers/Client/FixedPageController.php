<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Contact;
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
            "address" => $request->address,
            "message" => $request->message,
        ];
        Contact::create($data);
        return redirect()->back()->with("success","OK");
    }
}
