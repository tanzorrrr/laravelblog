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

Route::group(['middleware'=>['web']],function (){
    Route::group(['prefix'=>'admin','namespace'=>'Admin','midlewqre'=>['auth']],function(){
        Route::get('/','DashboardController@dashboard')->name('admin.index');
    });
    //Authentification Routes
    Route::get('auth/login','Auth\LoginController@getLogin');
    Route::post('auth/login','Auth\LoginController@postLogin');
    Route::get('auth/logout','Auth\LoginController@getLogout');

    //Regsration Routes
    Route::get('auth/register','Auth\RegisterController@getRegiser');
    Route::post('auth/register','Auth\RegisterController@postRegiser');

    Route::get('blog/{slug}',['as'=>'blog.single','uses'=>'BlogController@getSingle'])
    ->where('slug','[\w\d\-\_]+');

    Route::get('blog',['uses'=>'BlogController@getIndex','as'=>'blog.index']);
    Route::get('category', 'PageController@getCategory');

    Route::get('contact', 'PageController@getContact');

    Route::get('about', 'PageController@getAbout');

    Route::get('/', 'PageController@getIndex');

    Route::resource('posts', 'PostController');
    Route::resource('admin/categories','AdminCategoriesController');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
