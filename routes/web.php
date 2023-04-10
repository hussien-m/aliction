<?php

use App\Http\Controllers\BlogControlller;
use App\Models\Page;
use App\Models\Price;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('page/{slug}',function($slug){

    $page = str_replace('-',' ',$slug);
    $page = Page::whereTitle($page)->first();

    return view('page',compact('page'));

})->name('show.page');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/blog',[BlogControlller::class,'index'])->name('blog');
Route::get('/blog/post/{slug}',[BlogControlller::class,'show'])->name('post.show');
Route::get('/blog/category/{slug}',[BlogControlller::class,'showCategory'])->name('category-blog.show');
