<?php

use App\Http\Controllers\Client\CartController;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Client\FixedPageController;
use App\Http\Controllers\Client\PostController;
use App\Http\Controllers\Client\ProductController;
use App\Http\Controllers\Client\UserController;
use App\Models\Order;
use App\Notifications\HasOrder;
use Illuminate\Support\Facades\Notification;
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
Route::get("/tat-ca-san-pham/{category?}",[ProductController::class,"index","category"])->where(["category"])->name("products");
Route::get("/products/delete/{id}",[ProductController::class,'hide',"id"])->where(["id"])->name("hide-product");
Route::get("/categories/delete/{id}",[ProductController::class,'hideCategory',"id"])->where(["id"])->name("hide-category");
Route::get("/san-pham/{slug}",[ProductController::class,'showProduct',"slug"])->where(["slug"])->name("product");
Route::get("/lien-he/",[FixedPageController::class,'contact'])->name("contact");
Route::post("/lien-he/",[FixedPageController::class,'saveFeedback'])->name("contact.save");
Route::get("/gioi-thieu-nghe-nhan/",[FixedPageController::class,'about'])->name("about");
Route::get("/tin-tuc/{id}",[PostController::class,'render',"id"])->where(["id"])->name("post");

Route::middleware(['client'])->prefix("user")->group(function () {
    Route::get('/gio-hang', [CartController::class,"showCart"])->name("client.cart");
    Route::get('/add-cart/{id?}', [CartController::class,"addToCard","id"])->where(["id"])->name("client.cart.addItem");
    Route::get('/buy-now/{id?}', [CartController::class,"buyNow","id"])->where(["id"])->name("client.cart.buyItem");
    Route::post('/remove-item/', [CartController::class,"removePack"])->name("client.cart.removeItem");
    Route::post("/change-quantity",[CartController::class,"chanegQuantity"])->name("change.quantity");
    Route::post("/make-order",[CartController::class,"makeOrder"])->name("make.order");
    Route::get("/thong-tin-ca-nhan",[UserController::class,"show"])->name("profile");
    Route::post("/change-name",[UserController::class,"changeName"])->name("change.name");
    Route::post("/change-email",[UserController::class,"changeEmail"])->name("change.email");
    Route::post("/change-phone",[UserController::class,"changePhone"])->name("change.phone");
    Route::post("/change-password",[UserController::class,"changePassword"])->name("change.password");
});

Route::get("/login",[ClientController::class,"login"])->name("client.login");
Route::post("/login",[ClientController::class,"logged"])->name("client.login.check");
Route::post("/register",[ClientController::class,"register"])->name("client.register.check");
Route::get("/logout",[ClientController::class,"logout"])->name("client.logout");
Route::get("/api/drive/google",[ClientController::class,"googleLogin"])->name("google.login");
Route::get("/api/drive/facebook",[ClientController::class,"facebookLogin"])->name("facebook.login");
Route::get("/api/google-login",[ClientController::class,"googleCallback"])->name("google.callback");
Route::get("/api/facebook-login",[ClientController::class,"facebookCallback"])->name("google.callback");
Route::get("/api/drive/zalo",function (){
    $code_change = \Illuminate\Support\Str::random(43);
    $state = 1;
    $app_id = "1632857012351867391";
    $callback = "https://dodongdiepoanh.com/api/zalo-login";
    return redirect("https://oauth.zaloapp.com/v4/permission?app_id=$app_id&redirect_uri=$callback&code_challenge=$code_change&state=$state");
});
Route::get("/api/zalo-login",function (){
    return response()->content();
})->name("zalo.callback");
//Route::get("/testSlack",function (){
//    Notification::route('slack',env("SLACK_WEBHOOK"))
//    ->notify(new HasOrder(Order::find(1)));
//});
