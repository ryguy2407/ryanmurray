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

//STATIC PAGES
Route::get('/', function(){
	return view('pages.home');
});
Route::get('/about', function(){
	return view('pages.about');
});

Route::resource('page', 'PagesController');

Route::get('{id}', 'PagesController@show');
