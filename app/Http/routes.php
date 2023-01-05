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

//Main Pages
Route::get('/articles' , 'PagesController@articles')->name('articles');
Route::get('/products' , 'PagesController@products')->name('products');
Route::get('/exhibits' , 'PagesController@exhibits')->name('exhibits');
Route::get('/innovators' , 'PagesController@innovators')->name('innovators');
Route::get('/Coming_Soon' , 'PagesController@soon')->name('soon');
Route::get('/contact-us' , 'PagesController@contact')->name('contact');
//View Pages
Route::get('/article-view/{id}' , 'PagesController@articleView')->name('article-view');
Route::get('/innovator-view/{id}' , 'PagesController@innovatorsView')->name('innovator-view');
Route::get('/exhibits-view/{id}' , 'PagesController@exhibitsView')->name('exhibits-view');
Route::get('/products-view/{id}' , 'PagesController@productsView')->name('products-view');

Route::get('/article/latest' , 'PagesController@articlelatest')->name('article-latest');
Route::get('/products/latest' , 'PagesController@productslatest')->name('products-latest');

Route::get('/login', 'UserController@login')->name('login');
Route::post('/login', 'UserController@authenticate')->name('login-post');
Route::post('/authenticate', 'UserController@authenticate')->name('authenticate');
Route::get('/logout', 'UserController@logout')->name('logout');


Route::get('/admin', function () {
    return redirect()->route('admin.article.index');
});

Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function () {
    Route::get('/article' , 'ArticleController@index')->name('admin.article.index');
    Route::get('/article/set-active/{id}' , 'ArticleController@setActive')->name('article.set-active');
    Route::get('/article/set-inactive/{id}' , 'ArticleController@setInactive')->name('article.set-inactive');
    Route::get('/article/create' , 'ArticleController@create')->name('admin.article.create');
    Route::post('/article/create/store' , 'ArticleController@store')->name('article.store');
    Route::get('/article/edit/{id}' , 'ArticleController@edit')->name('admin.article.edit');
    Route::post('/article/edit/{id}/update' , 'ArticleController@update')->name('article.update');
    Route::get('/article/edit/{id}/delete' , 'ArticleController@delete')->name('article.delete');

    Route::get('/innovator' , 'InnovatorController@index')->name('admin.innovator.index');
    Route::get('/innovator/set-active/{id}' , 'InnovatorController@setActive')->name('innovator.set-active');
    Route::get('/innovator/set-inactive/{id}' , 'InnovatorController@setInactive')->name('innovator.set-inactive');
    Route::get('/innovator/create' , 'InnovatorController@create')->name('admin.innovator.create');
    Route::post('/innovator/create/store' , 'InnovatorController@store')->name('innovator.store');
    Route::get('/innovator/edit/{id}' , 'InnovatorController@edit')->name('admin.innovator.edit');
    Route::post('/innovator/edit/{id}/update' , 'InnovatorController@update')->name('innovator.update');
    Route::get('/innovator/edit/{id}/delete' , 'InnovatorController@delete')->name('innovator.delete');

    Route::get('/product' , 'ProductController@index')->name('admin.product.index');
    Route::get('/product/set-active/{id}' , 'ProductController@setActive')->name('product.set-active');
    Route::get('/product/set-inactive/{id}' , 'ProductController@setInactive')->name('product.set-inactive');
    Route::get('/product/create' , 'ProductController@create')->name('admin.product.create');
    Route::post('/product/create/store' , 'ProductController@store')->name('product.store');
    Route::get('/product/edit/{id}' , 'ProductController@edit')->name('admin.product.edit');
    Route::post('/product/edit/{id}/update' , 'ProductController@update')->name('product.update');
    Route::get('/product/edit/{id}/delete' , 'ProductController@delete')->name('product.delete');

    Route::get('/exhibit' , 'ExhibitController@index')->name('admin.exhibit.index');
    Route::get('/exhibit/set-active/{id}' , 'ExhibitController@setActive')->name('exhibit.set-active');
    Route::get('/exhibit/set-inactive/{id}' , 'ExhibitController@setInactive')->name('exhibit.set-inactive');
    Route::get('/exhibit/create' , 'ExhibitController@create')->name('admin.exhibit.create');
    Route::post('/exhibit/create/store' , 'ExhibitController@store')->name('exhibit.store');
    Route::get('/exhibit/edit/{id}' , 'ExhibitController@edit')->name('admin.exhibit.edit');
    Route::post('/exhibit/edit/{id}/update' , 'ExhibitController@update')->name('exhibit.update');
    Route::get('/exhibit/edit/{id}/delete' , 'ExhibitController@delete')->name('exhibit.delete');

    Route::get('/carousel' , 'HomepageController@index')->name('admin.carousel.index');
    Route::get('/carousel/set-active/{id}' , 'HomepageController@setActive')->name('carousel.set-active');
    Route::get('/carousel/set-inactive/{id}' , 'HomepageController@setInactive')->name('carousel.set-inactive');
    Route::get('/carousel/create' , 'HomepageController@create')->name('admin.carousel.create');
    Route::post('/carousel/create/store' , 'HomepageController@store')->name('carousel.store');
    Route::get('/carousel/{id}/delete' , 'HomepageController@destroy')->name('carousel.delete');
    
});
