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

Route::get('/article', 'ArticleController@create');
Route::post('/article', 'ArticleController@store');
Route::get('/articles/{id}', 'ArticleController@userArticles');
Route::get('/articles/{id}/like/toggle', 'ArticleController@toggleLike');

// Route::get('/contact', 'ContactController@create');
// Route::post('/contact', 'ContactController@store');

Route::post('/', 'CommentController@store');

Route::get('/', 'MainController@create');
Route::get('/home', 'MainController@create');

Auth::routes();
