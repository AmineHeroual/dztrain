<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Setting;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        view()->composer('front.inc.header', function($view){
            $view->with('categories', Category::select('id', 'name')->get());
            $view->with('settings', Setting::select('logo', 'favicon')->first());
        });

        view()->composer('front.inc.footer', function($view){
            $view->with('settings', Setting::first());
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
