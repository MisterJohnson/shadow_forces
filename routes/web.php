<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/news/{id}', 'ArticleController@getArticle')->name('get.article');

Route::get('/character', 'CharactersController@index')->name('get.character');

Route::get('/login', 'AuthController@getSignin');
Route::post('/login', 'AuthController@postSignin');

Route::get('/logout', 'AuthController@logout')->name('logout');


/* JSON ROUTE */
Route::get('/api/articles/{limit}', 'JsonController@getArticles')->name('get.articles');


Route::group([ 'middleware' => 'admin'], function () {
    Route::get('/character', 'CharactersController@index')->name('character');
    Route::get('/character/add', 'CharactersController@add')->name('character.add');
    Route::get('/character/update', 'CharactersController@add')->name('character.update');
    Route::get('dashboard', 'HomeController@index')->name('dashboard');

    /* JSON ROUTE */
    Route::get('/api/metatypes', 'JsonController@getMetatypes')->name('get.metatypes');
});
