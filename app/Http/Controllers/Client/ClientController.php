<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class ClientController extends Controller
{
    public function login()
    {
        if (!backpack_auth()->check()) {
            return view("clients.login");
        } else {
            return redirect()->back();
        }
    }

    public function checking($email, $password)
    {
        $user = User::where("email", "=", $email)->first();
        if (!isset($user->id)) {
            return false;
        }
        if (!Hash::check($password, $user->password)) {
            return false;
        }
        backpack_auth()->loginUsingId($user->id);
        return true;
    }

    public function logged(Request $request)
    {
        if ($this->checking($request->email, $request->password)) {
            if ($request->remember == "on") {
                backpack_auth()->viaRemember();
            }
            return redirect("/");
        } else {
            return redirect()->back()->with("error", "Sai tài khoản hoặc mật khẩu");
        }
    }

    public function register(Request $request)
    {
        if (!isset($request->email)) {
            return redirect()->back()->with("invalid-register", "");
        }
        if (User::where("email", "=", $request->email)->count() > 0) {
            return redirect()->back()->with("invalid-register", "Email đã được đăng ký");
        }
        if ($request->repassword != $request->password) {
            return redirect()->back()->with("invalid-register", "Nhập lại mật khẩu không đúng");
        }
        $user = [
            "name" => $request->name,
            "password" => Hash::make($request->password),
            "email" => $request->email,
            "phone" => $request->phone,
        ];
        $create = User::create($user);
        backpack_auth()->loginUsingId($create->id);
        return redirect("/");

    }

    public function logout()
    {
        backpack_auth()->logout();
        return redirect("/");
    }

    public function googleLogin()
    {
        return Socialite::driver("google")->redirect();
    }
    public function facebookLogin()
    {
        return Socialite::driver("facebook")->redirect();
    }

    public function googleCallback()
    {
        $user = Socialite::driver("google")->user();
        $email = $user->getEmail() ;
        if (User::checkByEmail($email)) {
            $tmp = [
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'google_id' => $user->getId(),
                'password'=>Hash::make($user->getEmail().Str::random(4))
            ];
            $account = User::create($tmp);
        } else {
            $account = User::getUserByEmail($email);

        }
        backpack_auth()->loginUsingId($account->id);
        return redirect("/");
    }
    public function facebookCallback()
    {
        $user = Socialite::driver("facebook")->user();
        $emailFB = $user->getEmail() ?? $user->getId()."@facebook.com";
        if (User::checkByEmail($emailFB)) {
            $tmp = [
                'name' => $user->getName(),
                'email' => $user->emailFB,
                'google_id' => $user->getId(),
                'password'=>Hash::make($user->getEmail().Str::random(4))
            ];
            $account = User::create($tmp);
        } else {
            $account = User::getUserByEmail($emailFB);
        }
        backpack_auth()->loginUsingId($account->id);
        return redirect("/");
    }
}
