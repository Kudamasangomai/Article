<?php

namespace App\Providers;

use App\Models\Article;
use App\Models\category;
use App\Models\Tag;
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
        $view->with('articles', $articles = Article::with(['tags','category','user','likes','comments'])->latest()->paginate(5));
        $view->with('tags',$tags = Tag::all());
        $view->with('categories',$categories = category::all());
        $view->with('Latest_articles', $Latest_articles = Article::latest()->take(5)->get());
        


        });

    }
}
