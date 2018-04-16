<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\ProductType;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('master',function($view){
         $brand = ProductType::all();
         $view->with('brand',$brand);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
