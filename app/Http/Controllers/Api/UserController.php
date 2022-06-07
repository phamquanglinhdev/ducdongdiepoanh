<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(){
        $token = User::find(1)->createToken("Bearer");
        return [
            "token"=> $token->plainTextToken,
        ];
    }
    public function user(Request $request){
        return $request->user();
    }
}
