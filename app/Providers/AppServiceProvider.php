<?php

namespace App\Providers;
use App\Models\Product;
use App\Models\Category;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        \View::composer('partials.header',function($view){
            $categories = Category::where('name','demography')->get();

		    $brands = Category::where('name','Brand')->get();

            $view->with(compact('categories','brands'));
        });

        \View::composer('partials.menu',function($view){
            $categories = Category::where('name','demography')->get();

		    $brands = Category::where('name','Brand')->get();

            $view->with(compact('categories','brands'));
        });
    }
}
