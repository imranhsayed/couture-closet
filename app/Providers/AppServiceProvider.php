<?php

namespace App\Providers;
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
            $categories = Category::where('name','demography')->distinct()->get();

		    $brands = Category::where('name','Brand')->take(5)->distinct()->get();

            $view->with(compact('categories','brands'));
        });

        \View::composer('partials.menu',function($view){
            $categories = Category::where('name','demography')->distinct()->get();

		    $brands = Category::where('name','Brand')->distinct()->get();

            $view->with(compact('categories','brands'));
        });
    }
}
