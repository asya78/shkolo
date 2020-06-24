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
Route::get('/','DefaultController@getHome');

Route::resource('button', 'ButtonController')->except(['index']);

Route::get('button/{id}',function($id){
    return view('pages.home');
});




