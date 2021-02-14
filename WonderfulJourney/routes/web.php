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

Route::group(['middleware' => 'guest'], function(){
    Route::get('/', 'ArticleController@getAllArticle');
    Route::get('/category/{category_id}', 'ArticleController@getCategorizedArticle');
    Route::get('/about_us', function(){
        return view('about_us');
    });
    Route::get('/register', 'UserController@showRegisterPage');
    Route::post('/do_register', 'UserController@registerUser');
    Route::get('/login', 'UserController@showLoginPage')->name('login');
    Route::post('/do_login', 'UserController@login');
});

Route::group(['middleware' => ['auth']], function(){
    Route::get('/home', function(){
        return view('home');
    });
    Route::post('/delete_article/{article_id}', 'ArticleController@deleteArticle');
});

Route::get('/logout', 'UserController@logout');

Route::group(['middleware' => ['role:Admin']], function(){
    Route::get('/all_user', 'UserController@getAllUser');
    Route::post('/delete_user/{user_id}', 'UserController@deleteUser');
    Route::get('/user_article/{user_id}', 'ArticleController@getArticleByUserId');
});

Route::get('/full_story/{article_id}', 'ArticleController@getArticleById');
Route::get('/back', 'ArticleController@back');

Route::group(['middleware' => ['role:User']], function(){
    Route::post('/update_profile', 'UserController@updateProfile');
    Route::get('/show_update_profile', 'UserController@showUpdateProfile');
    Route::get('/all_article', 'ArticleController@getOwnedArticle');
    Route::get('/show_create_article', 'ArticleController@showCreateArticle');
    Route::post('/create_article', 'ArticleController@createArticle');
});

