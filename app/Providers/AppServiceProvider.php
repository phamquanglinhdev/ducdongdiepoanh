<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Option;
use App\Models\Product;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        try {
            $global = [];
            $options = Option::where("isActive", "=", true)->get();
            foreach ($options as $option) {
                $global[$option->alias] = $option->value;
            }
            View::share("SETTING", $global);
        } catch (\Exception) {

        }
        try {
            $hotProducts = Product::where("active","=",1)->limit(16)->get();
            View::share("HOT_PRODUCTS", $hotProducts);
        }catch (\Exception){

        }
        try {
            $local_category = Category::where("active","=",1)->get();
            View::share("LOCAL_CATEGORIES", $local_category);
        }catch (\Exception ){}
        Schema::defaultStringLength(191);

    }
}
