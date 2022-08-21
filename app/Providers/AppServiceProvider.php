<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Option;
use App\Models\Page;
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
            $hotProducts = Product::where("active", "=", 1)->limit(8)->get();
            View::share("HOT_PRODUCTS", $hotProducts);
        } catch (\Exception) {

        }
        try {
            $local_category = Category::where("active", "=", 1)->where("category_id", null)->get();
            $sorted = [];
            foreach ($local_category as $category) {
                if ($category->hasSub()) {
                    $sorted[] = $category;
                }
            }
            foreach ($local_category as $category) {
                if (!$category->hasSub()) {
                    $sorted[] = $category;
                }
            }
            View::share("LOCAL_CATEGORIES", $sorted);
        } catch (\Exception) {
        }

        try {
            $page = Page::where("name", "like", "%Chính sách%")->get();

            View::share("PAGES", $page);
        } catch (\Exception) {
        }
        Schema::defaultStringLength(191);

    }
}
