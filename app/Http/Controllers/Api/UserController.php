<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request){
        if(!isset($request->email)){
            return response()->json(
                [
                    'message' => 'invalid email',
                ],
                400
            );
        }
        if(User::where("email","=",$request->email)->count()==0){
            return response()->json(
                [
                    'message' => 'invalid email',
                ],
                400
            );
        }
        if(!isset($request->password)){
            return response()->json(
                [
                    'message' => 'invalid password',
                ],
                400
            );
        }
        if(!Hash::check($request->password,User::where("email","=",$request->email)->first()->password)){
            return response()->json(
                [
                    'message' => 'invalid password',
                ],
                400
            );
        }
        $token = User::where("email","=",$request->email)->first()->createToken("Bearer");
        return response()->json(
            [
                'token' => $token->plainTextToken,
                'token_type'=>"Bearer"
            ],
            200
        );
    }

    public function user(Request $request){
        return $request->user();
    }
}
