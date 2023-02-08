<?php


use App\Models\Tag;
use App\Models\Article;
use App\Models\category;
use NewsAPI\Facades\NewsAPI;
use App\Http\Controllers\comment;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\LoginGithubController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return view('auth.login');
});

Route::get('/dashboard', function () {

// not a best way to call news api am.could have used some loops i think.will refactor this
   $cnn_news = NewsAPI::everything()->get(['language' => 'en','domains'=>'cnn.com','sortBy' => 'publishedAt','pageSize'=>5]);
   $newsapi = NewsAPI::everything()->get(['language' => 'en','domains'=>'bbc.co.uk','sortBy' => 'publishedAt','pageSize'=>5]);
   $aljazeera_news = NewsAPI::everything()->get(['language' => 'en','domains'=>'aljazeera.com','sortBy' => 'publishedAt','pageSize'=>5]);
    $data = [
        'articles' => Article::with(['tags', 'category', 'user', 'likes', 'comments'])->latest()->paginate(5),
        'tags' => Tag::all(),
        'categories' => category::all(),
        'Latest_articles' => Article::latest()->take(5)->get(),
        'news' => $newsapi->articles,
        'cnn_news' => $cnn_news->articles,
        'aljazeera_news' => $aljazeera_news->articles


    ];
    return view('dashboard')->with($data);
})->middleware(['auth'])->name('dashboard');

#named Routes
Route::get('article/{id}', [ArticleController::class, 'show'])->name('article_object');

#Route Groups
Route::group(['middleware' => 'auth'], function () {

    // Route::resource('/dashboard',DashboardController::class);
    Route::resource('articles', ArticleController::class);
    Route::resource('categories', CategoriesController::class);
    Route::resource('tags', TagsController::class);
    Route::resource('comments', Comment::class);
    Route::get('articles/{id}/user_articles', [ArticleController::class, 'user_articles'])->name('user_articles');
    Route::post('/likes/{id}/store', [LikeController::class, 'store'])->name('likes.store');
    Route::delete('/likes/{id}/destroy', [LikeController::class, 'destroy'])->name('likes.destroy');;
});


Route::get('auth/github', [LoginGithubController::class, 'redirectGithub']);
Route::get('auth/github/callback', [LoginGithubController::class, 'handleGithubCallback']);


Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

require __DIR__ . '/auth.php';
