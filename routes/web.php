<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;



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

//Home Page
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('posts',PostsController::class);

Route::get('/search',[PostsController::class,'search'])->name('posts.search');

Route::group(['middleware'=>['auth'], 'prefix'=>'dashboard'], function (){
    //Dashboard
    Route::group(['prefix'=>'','as'=>'dashboard.'], function(){
        Route::get('/', [DashboardController::class, 'index'])->name('index');
    });
    //Categories
    Route::resource('category',CategoryController::class);
});



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
