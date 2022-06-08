<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function updateName(Request $request)
    {
        $name = $request->name ?? $request->user()->name;
        $id = $request->user()->id;
        User::find($id)->update([
            'name' => $name
        ]);
        return response()->json([
            "message" => "Đổi tên thành công !",
            "name" => $name,
        ], 200);
    }

    public function updatePhone(Request $request)
    {
        $phone = $request->phone ?? $request->user()->phone;
        $id = $request->user()->id;
        User::find($id)->update([
            'phone' => $phone
        ]);
        return response()->json([
            "message" => "Đổi SDT thành công !",
            "phone" => $phone,
        ], 200);
    }

    public function updateAddress()
    {

    }
}
