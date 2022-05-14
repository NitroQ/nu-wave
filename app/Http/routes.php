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

Route::group(['prefix' => 'admin'], function () {
    Route::resource('article' , 'ArticleController');
    Route::get('/article' , 'ArticleController@index')->name('admin.article.index');
    Route::get('/article/create' , 'ArticleController@create')->name('admin.article.create');
    Route::post('/article/create/store' , 'ArticleController@store')->name('article.store');
});
