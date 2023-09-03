<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\settinge;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        view()->composer("front.inc.header",function($view){

            $view->with("categories",Category::select("id","name")->get());
            $view->with("settinges",Settinge::select("name","logo","favicon")->first());
        });
        view()->composer("front.inc.footer",function($view){

            $view->with("settinges",Settinge::first());
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
