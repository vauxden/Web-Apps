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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('users', 'UserController@index')->middleware('auth');
Route::get('users/{id}', 'UserController@show')->name('users.show')->middleware('auth');
//Route::get('users/{id}', 'UserController@destroy')->name('user.destroy')

Route::get('frontpage', 'PostController@index')->middleware('auth');
Route::get('frontpage/{id}', 'PostController@show')->name('posts.show')->middleware('auth');

Route::get('comments', 'CommentController@index')->middleware('auth');
Route::get('comments/{id}', 'CommentController@show')->name('comments.show')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
