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

//FrontEnd
Route::get('/', function () {
    return view('frontend.home');
});

Route::get('menu', function(){
	return view('frontend.menu');
})->name('menu');

Route::get('location', function(){
	return view('frontend.location');
})->name('location');

Route::get('blog', function(){
	return view('frontend.archive');
})->name('blog');

Route::get('reservations', function(){
	return view('frontend.reservation');
})->name('reservation');

Route::get('news', function(){
	return view('frontend.news');
})->name('news');

Route::get('staff', function(){
	return view('frontend.staff');
})->name('staff');

Route::get('gallery', function(){
	return view('frontend.gallery');
})->name('gallery');





//BackEnd
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
