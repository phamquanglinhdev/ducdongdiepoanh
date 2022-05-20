<?php

namespace App\Providers;

use App\Models\Option;
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
        Schema::defaultStringLength(191);

    }
}
