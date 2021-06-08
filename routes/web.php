<?php

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

Route::get('/','PagesController@index');
Route::get('/services','PagesController@services');
Route::get('/projects','PagesController@projects');
Route::get('/about','PagesController@about');
Route::get('/contact','PagesController@contact');




Route::resource('posts','PostsController');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

Route::get('/sendemail', 'SendEmailController@index');
Route::post('/sendemail/send', 'SendEmailController@send');
