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



/*Route::get('hello/', function () {
    return view('welcome');
    return 'Hello World!';
 });



Route::get('/about', function(){
    return view('pages.about');
});

Route::get('/services', function(){
    return view('pages.services');
});

 
*/ 
Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::resource('posts', 'PostController');





Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
