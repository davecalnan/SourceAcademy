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
| Misc Routes
|--------------------------------------------------------------------------
*/

// Redirects www URLs to non-www URLs.
Route::domain('www.'.env('APP_DOMAIN'))->group(function () {
	Route::get('{uri?}', function ($uri = null) {
		return redirect(env('APP_URL').'/'.$uri);
	});
});

/*
|--------------------------------------------------------------------------
| Site Routes
|--------------------------------------------------------------------------
*/

Route::domain(env('APP_DOMAIN'))->group(function () {
	Route::view('/', 'site.home')->name('site.home');

	Route::view('site', 'site');

	Auth::routes();
	Route::get('password/update', '\App\Http\Controllers\Auth\UpdatePasswordController@showPasswordUpdateForm')->name('password.update');
	Route::post('password/update', '\App\Http\Controllers\Auth\UpdatePasswordController@update')->name('password.update');
	Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

	Route::post('projects', 'ProjectController@store')->name('projects.store');
	Route::post('resources', 'ResourceController@store')->name('resources.store');
});

/*
|--------------------------------------------------------------------------
| App Routes
|--------------------------------------------------------------------------
*/

Route::group(['middleware' => 'auth'], function () {
	Route::domain('app.'.env('APP_DOMAIN'))->group(function () {
		Route::view('/', 'app.home')->name('app.home');
		Route::view('app', 'app')->name('app');

		Route::get('projects', 'ProjectController@showUserProjects')->name('app.projects.index');
		Route::get('projects/{projectSlug}', 'ProjectController@show')->name('app.projects.single');

		Route::get('test', 'TestController@app');
	});
});

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => 'can:accessAdminPanel'], function () {
	Route::domain('admin.'.env('APP_DOMAIN'))->group(function () {
		Route::get('/', 'AdminController@home');

		Route::get('projects', 'ProjectController@adminIndex')->name('admin.projects.index');
		Route::get('projects/{projectSlug}', 'ProjectController@adminShow')->name('admin.projects.single');

		Route::view('/test', 'admin.test');
	});
});