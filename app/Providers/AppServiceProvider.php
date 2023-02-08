<?php

namespace App\Providers;

use json_decode;
use App\Models\Tag;
use App\Models\Article;
use App\Models\category;
use Illuminate\Support\Str;
use NewsAPI\Facades\NewsAPI;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

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
        // $response = NewsAPI::sources()->all();
        // $jsonData = json_encode($response);
        // $view->with('articles', $articles = Article::with(['tags','category','user','likes','comments'])->latest()->paginate(5));
        // $view->with('tags',$tags = Tag::all());
        // $view->with('categories',$categories = category::all());
        // $view->with('Latest_articles', $Latest_articles = Article::latest()->take(5)->get());
        // $view->with('news',$news = NewsAPI::topHeadlines()->get([
        //         'country' => 'gb',
        //         'category'=>'sports'
        // ]));
        // $view->with('news',$news = htmlspecialchars($jsonData));

        
   

        });

        Str::macro('readingtime',function ($user_article,$wordsperminute = 200){
            return intval(ceil(Str::wordCount(strip_tags($user_article)) / $wordsperminute));
        });

    }
}
