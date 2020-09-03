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

Auth::routes();
Route::get('/', 'HomeController@index')->name('index');
Route::get('/home', 'HomeController@home')->name('home');
Route::get('/ask', 'HomeController@ask')->name('ask');
Route::resource('posts', 'PostController', ['only' => ['store']]);
Route::get('/posts/{id}', 'PostController@each')->name('posts.each');
Route::get('/posts/open', 'PostController@open')->name('posts.open');
Route::get('/posts/open/{id}', 'PostController@open_category')->name('posts.open_category');
Route::get('/posts/closed', 'PostController@closed')->name('posts.closed');
Route::get('/posts/closed/{id}', 'PostController@closed_category')->name('posts.closed_category');
Route::get('/posts/{id}/solve', 'PostController@solve')->name('posts.solve');
Route::resource('replies', 'ReplyController', ['only' => ['store']]);
Route::get('/mypage', 'HomeController@mypage')->name('mypage');
Route::get('/replies/{id}/close', 'ReplyController@closePost')->name('replies.close');
Route::get('/markAsRead', function() {
    auth()->user()->unreadNotifications->markAsRead();
    // redirect()->back();
})->name('markAsRead');



