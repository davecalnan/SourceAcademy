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

/*
|--------------------------------------------------------------------------
| Site Routes
|--------------------------------------------------------------------------
*/

Route::namespace('Site')->group(function () {
	Route::get('/', function () {
		return view('site');
	});

	Auth::routes();

	Route::get('/home', 'HomeController@index')->name('home');

	Route::get('/users', function() {
		return App\User::all();
	});
});

/*
|--------------------------------------------------------------------------
| App Routes
|--------------------------------------------------------------------------
*/

Route::prefix('app')->group(function () {
	Route::get('/', function () {
		return view('app.home');
	});

	Route::resource('projects', 'ProjectController');

	Route::get('/test', function () {
		return view('app.test');
	});
});

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->group(function () {
	Route::get('/', 'AdminController@home');

	Route::resource('projects', 'ProjectController');

	Route::get('/test', function () {
		return view('admin.test');
	});
});