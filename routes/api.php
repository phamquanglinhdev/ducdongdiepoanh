<?php

use App\Http\Controllers\Admin\SendPush;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post("filter",[ProductController::class,"filter"])->name("filter");
Route::get("sendOne",[SendPush::class,"sending"])->name("one-signal");
Route::get("/sendTest/{mail}",function ($mail){
    Mail::to($mail)->send(new TestHelloMail());
});
