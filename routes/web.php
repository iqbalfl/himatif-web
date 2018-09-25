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

Route::get('/', function () {
    return view('home');
});

Route::get('/post','PostController@index')->name('post.index');
Route::get('/post/{slug}','PostController@show');

Route::get('/gallery', function () {
    return view('galleries.index');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
