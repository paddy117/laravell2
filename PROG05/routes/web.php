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

Route::get('/', 'Page1controller@show')->name('page1');

Route::get('/page1','Page1controller@show')->name('page1');

Route::get('/post/{post}', 'Page1_1controller@show');


//Route::get('/page1', 'SearchController@search');
//Route::get('/page1', 'SearchController@search');

Route::get('/resultpage', 'resultController@show')->name('resultpage');
Route::get('/resultpage', 'SearchController@search')->name('resultpage');



Route::post('/CreatePost', 'CreatePostPagecontroller@store');
Route::get('/CreatePost', 'CreatePostPagecontroller@show')->name('createpost');

Auth::routes();

Route::get('/home','usercontroller@show')->name('user');

Route::get('/home', 'HomeController@show')->name('home');

Route::post('/home', 'editcontroller@edit');
