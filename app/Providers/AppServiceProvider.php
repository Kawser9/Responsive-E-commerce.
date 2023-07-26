<?php

namespace App\Providers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
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
            $categories=Category::all();
            View::share('category', $categories);
            // view()->share('',''); Another way without facads
        


            $brand=Brand::all();
            View::share('brands',$brand);

            $products=Product::all();
            View::share('products',$products);



        Paginator::useBootstrap();
    }
}
