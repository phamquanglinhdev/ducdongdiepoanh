<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    public function login(){
        if(!backpack_auth()->check()){
            return view("clients.login");
        }else{
            return redirect()->back();
        }
    }
    public function checking($email,$password){
        $user = User::where("email","=",$email)->first();
        if(!isset($user->id)){
            return false;
        }
        if(!Hash::check($password,$user->password)){
            return false;
        }
        backpack_auth()->loginUsingId($user->id);
        return true;
    }
    public function logged(Request $request){
        if($this->checking($request->email,$request->password)){
            if($request->remember == "on"){
                backpack_auth()->viaRemember();
            }
            return redirect("/");
        }else{
            return redirect()->back()->with("error","Sai tài khoản hoặc mật khẩu");
        }
    }
    public function logout(){
        backpack_auth()->logout();
        return redirect("/");
    }
}
