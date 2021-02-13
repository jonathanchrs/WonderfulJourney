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

Route::get('/guesthome', 'ArticleController@getAllArticle');
Route::get('/category/{category_id}', 'ArticleController@getCategorizedArticle');
Route::get('/about_us', function(){
    return view('about_us');
});
Route::get('/register', 'UserController@showRegisterPage');
Route::post('/do_register', 'UserController@registerUser');
Route::get('/login', 'UserController@showLoginPage');
Route::post('/do_login', 'UserController@login');
Route::get('/home', function(){
    return view('home');
});
Route::get('/logout', 'UserController@logout');
Route::get('/all_user', 'UserController@getAllUser');
Route::post('/delete_user/{user_id}', 'UserController@deleteUser');
Route::get('/user_article/{user_id}', 'ArticleController@getArticleByUserId');
Route::post('/delete_article/{article_id}', 'ArticleController@deleteArticle');

Route::get('/full_story/{article_id}', 'ArticleController@getArticleById');