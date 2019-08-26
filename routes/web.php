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
	$posts = \App\Blog::paginate(8);
	return view('pages.home')->with('posts', $posts);
});
Route::get('/about', function(){
	return view('pages.about');
});

//Auth Routes
Auth::routes();

Route::resource('blog', 'BlogController');

