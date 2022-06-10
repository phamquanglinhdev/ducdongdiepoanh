<?php

use App\Http\Controllers\Admin\SendPush;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Client\ProductController;
use App\Mail\TestHelloMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->group(function (){
    Route::get('/user/info', [UserController::class,"user"]);
    Route::post('/user/edit/name', [CustomerController::class,"updateName"]);
    Route::post('/user/edit/phone', [CustomerController::class,"updatePhone"]);
    Route::get('/products', [\App\Http\Controllers\Api\ProductController::class,"all"]);
    Route::post('/category/', [\App\Http\Controllers\Api\ProductController::class,"byCategory"]);
    Route::post('/categories/', [\App\Http\Controllers\Api\ProductController::class,"categories"]);
    Route::post('/product/', [\App\Http\Controllers\Api\ProductController::class,"singleProduct"]);
});
Route::post("filter",[ProductController::class,"filter"])->name("filter");
Route::get("sendOne",[SendPush::class,"sending"])->name("one-signal");
Route::get("/sendTest/{mail}",function ($mail){
    Mail::to($mail)->send(new TestHelloMail());
});

Route::post("/auth/login",[UserController::class,"login"])->name("api.auth.login");

