<?php

namespace App\Providers;

use App\Models\Article;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
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
           view()->composer('dashboard', function ($view) 
       {
        $view->with('articles', $articles = Article::orderBy('created_at','desc')->get());


        });

    }
}
