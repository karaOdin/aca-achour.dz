<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;
use View;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
         View::composer('*', function($view)
        {
            
            $view->with('productsF',DB::table('products')->latest()->limit(3)->get());
        });
    }
}
