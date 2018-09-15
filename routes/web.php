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

Route::get('/', 'HomeController@index');

Route::get('/news/{id}', 'ArticleController@getArticle')->name('get.article');

Route::get('/character', 'CharactersController@index')->name('get.character');

Route::get('login', 'AuthController@getSignin')->name('login');


/* JSON ROUTE */
Route::get('/api/articles/{limit}', 'JsonController@getArticles')->name('get.articles');


Route::group([ 'middleware' => 'admin'], function () {

});
