<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/' , 'PagesController@home')->name('home');
Route::get('/article-view/{id}' , 'PagesController@articleView')->name('article-view');
Route::get('/articles' , 'PagesController@articles')->name('articles');
Route::get('/products' , 'PagesController@products')->name('products');
Route::get('/innovators' , 'PagesController@innovators')->name('innovators');
Route::get('/Coming_Soon' , 'PagesController@soon')->name('soon');
Route::get('/admin', function () {
    return redirect()->route('admin.article.index');
});

Route::group(['prefix' => 'admin'], function () {


    Route::get('/article' , 'ArticleController@index')->name('admin.article.index');

    Route::get('set-active/{id}' , 'ArticleController@setActive')->name('article.set-active');
    Route::get('set-inactive/{id}' , 'ArticleController@setInactive')->name('article.set-inactive');

    Route::get('/article/create' , 'ArticleController@create')->name('admin.article.create');
    Route::post('/article/create/store' , 'ArticleController@store')->name('article.store');
    Route::get('/article/edit/{id}' , 'ArticleController@edit')->name('admin.article.edit');
    Route::post('/article/edit/{id}/update' , 'ArticleController@update')->name('article.update');
    Route::get('/article/edit/{id}/delete' , 'ArticleController@delete')->name('article.delete');
    
});
