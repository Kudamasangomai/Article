<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoriesController;
use App\Models\Article;

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

    $articles = Article::with('category')->take(5)->latest()->get();
    return view('welcome',compact('articles'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

#named Routes
Route::get('article/{id}', [ArticleController::class, 'show'])->name('article_object');

#Route Groups
Route::group(['middleware' => 'auth'], function(){

    Route::resource('articles',ArticleController::class);
    Route::resource('categories',CategoriesController::class);
});

require __DIR__.'/auth.php';
