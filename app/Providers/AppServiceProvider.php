<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use View;
use DB;
use App\Product;
use App\Project;
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
        Schema::defaultStringLength(191);

        View::composer('*', function($viewBar)
        {
            $productRecent = session()->get('products.recently_viewed');
            $projectRecent = session()->get('projects.recently_viewed');
            $viewBar->with(
                [
                    'bars'=>DB::table('activities')->get(),
                    'recentlyViewed' => Product::find($productRecent),
                    'recentlyViewedProjects' => Project::find($projectRecent),
            ]);
        });
       
    }
}
