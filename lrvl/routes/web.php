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

Route::get('/', 'HomeController@index')->name('home');

Route::view('/about', 'about')->name('about');
Route::view('/vue', 'vue')->name('vue');

Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'as' => 'admin.'
], function() {
    Route::get('/', 'NewsController@index')->name('index');
    Route::match(['get','post'],'/create', 'NewsController@create')->name('create');
    Route::get('/edit/{news}', 'NewsController@edit')->name('edit');
    Route::post('/update/{news}', 'NewsController@update')->name('update');
    Route::get('/destroy/{news}', 'NewsController@destroy')->name('destroy');

   // Route::resource('news', 'NewsController');

    Route::get('/test3', 'IndexController@test2')->name('test2');
});

Route::group([
    'prefix' => 'news',
    'as' => 'news.'
], function() {
    Route::group([
        'as' => 'category.'
    ], function () {
        Route::get('/categories', 'CategoryController@index')->name('index');
        Route::get('/category/{slug}', 'CategoryController@show')->name('show');
    });

    Route::get('/', 'NewsController@index')->name('index');
    Route::get('/one/{news}', 'NewsController@show')->name('show');
});

Auth::routes();


