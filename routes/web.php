<?php

use App\Http\Controllers\Client\FixedPageController;
use App\Http\Controllers\Client\PostController;
use App\Http\Controllers\Client\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('clients.index');
})->name("index");
Route::get("/tat-ca-san-pham",[ProductController::class,"index"])->name("products");
Route::get("/products/delete/{id}",[ProductController::class,'hide',"id"])->where(["id"])->name("hide-product");
Route::get("/categories/delete/{id}",[ProductController::class,'hideCategory',"id"])->where(["id"])->name("hide-category");
Route::get("/san-pham/{slug}",[ProductController::class,'showProduct',"slug"])->where(["slug"])->name("product");
Route::get("/lien-he/",[FixedPageController::class,'contact'])->name("contact");
Route::post("/lien-he/",[FixedPageController::class,'saveFeedback'])->name("contact.save");
Route::get("/gioi-thieu-nghe-nhan/",[FixedPageController::class,'about'])->name("about");
Route::get("/tin-tuc/{id}",[PostController::class,'render',"id"])->where(["id"])->name("post");
