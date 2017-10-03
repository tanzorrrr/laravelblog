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

Route::group(['middleware'=>['web']],function () {
    Route::get('blog/{slug}',['as'=>'blog.single','uses'=>'BlogController@getSingle'])
    ->where('slug','[\w\d\-\_]+');
    Route::get('category', 'PageController@getCategory');

    Route::get('contact', 'PageController@getContact');

    Route::get('about', 'PageController@getAbout');

    Route::get('/', 'PageController@getIndex');

    Route::resource('posts', 'PostController');
});

