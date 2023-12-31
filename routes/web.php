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


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'TopicController@index')->name('topics.index');
Route::resource('topics','TopicController');//->except(['index']);

/* Route::get('/vue1', function () {
 return view('view1');
}); */

Route::post('/comments/(topic)','commentcontroller@store')->name('comments.store');

//https://www.laraveltube.com/tutoriel/laravel-6?page=12#/

Auth::routes();

Route::get('/home','HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/comments/{topic}', 'CommentController@store')->name('comments.store');
Route::post('/commentReply/{comment}','CommentController@storeCommentReply')->name('comments.storeReply');

Route::get('/home', 'HomeController@index')->name('home');

//Formulaire de contact
Route::get('/contact/Envoimail', 'ContactController@contacterServiceClient')->name('contact');