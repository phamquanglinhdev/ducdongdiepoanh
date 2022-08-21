<?php

use App\Http\Controllers\Admin\ContactCrudController;
use App\Http\Controllers\Admin\OrderCrudController;
use App\Http\Controllers\Client\ImportController;
use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix' => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array)config('backpack.base.web_middleware', 'web'),
        (array)config('backpack.base.middleware_key', 'admin')
    ),
    'namespace' => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('category', 'CategoryCrudController');
    Route::crud('product', 'ProductCrudController');
    Route::crud('contact', 'ContactCrudController');
    Route::get('/feedback/{id}', [ContactCrudController::class, "showFeedback", "id"])->where(["id"])->name("feedback");
    Route::get('/show-order/{id}', [OrderCrudController::class, "showOrder", "id"])->where(["id"])->name("show-order");
    Route::crud('post', 'PostCrudController');
    Route::crud('option', 'OptionCrudController');
    Route::crud('order', 'OrderCrudController');
    Route::crud('device', 'DeviceCrudController');
    Route::crud('user', 'UserCrudController');
    Route::get("import",[ImportController::class,"ExcelImport"])->name("ExcelImport");
    Route::post("import/save",[ImportController::class,"SaveData"])->name("post.excel");
    Route::crud('struct', 'StructCrudController');
    Route::crud('page', 'PageCrudController');
}); // this should be the absolute last line of this file