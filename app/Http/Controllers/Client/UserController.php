<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function show()
    {
        return view("clients.profile");
    }

    public function changeName(Request $request): bool
    {
        User::find(backpack_user()->id)->update(["name" => $request->value]);
        return true;
    }

    public function changeEmail(Request $request): bool
    {
        User::find(backpack_user()->id)->update(["email" => $request->value]);
        return true;
    }

    public function changePhone(Request $request): bool
    {
        User::find(backpack_user()->id)->update(["phone" => $request->value]);
        return true;
    }

    public function changePassword(Request $request)
    {
        if (!Hash::check($request->old, backpack_user()->password)) {
            return "Mật khẩu cũ không chính xác";
        }
        if($request->new != $request->re){
            return "Vui lòng nhập lại chính xác mật khẩu";
        }
        $password = Hash::make($request->new);
        User::find(backpack_user()->id)->update(["password"=>$password]);
            return "Đổi mật khẩu thành công";
    }
}
