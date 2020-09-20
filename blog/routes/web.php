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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', 'Aboutcontroller@show')->name('about');

Route::get('/newsmain', 'NewsmainController@show')->name('newsmain');

//Route::get('/newsmain/{id}', function($id){
////$id = request('id');
////return $id;
//});

Route::get('/news/{id}', 'newspostcontroller@show');
