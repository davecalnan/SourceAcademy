<?php

use App\Http\Controllers\UserController;

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
Route::domain('www.' . env('APP_DOMAIN'))->group(function () {
    Route::get('{wildcard?}', function ($wildcard = "") {
        return redirect(env('APP_URL') . '/' . $wildcard);
    })->where('wildcard', '.+');
});

/*
|--------------------------------------------------------------------------
| Site Routes
|--------------------------------------------------------------------------
*/

Route::domain(env('APP_DOMAIN'))->group(function () {
    Route::view('/', 'site.home')->name('site.home');

    Route::view('apply', 'site.apply')->name('site.apply');

    Route::get('signup', 'SignupController@signup')->name('client.signup');
    Route::get('signup/{step?}', 'SignupController@client')->name('client.signup.step');
    Route::post('signup/{step}', 'SignupController@action')->name('client.signup.action');

    Route::view('site', 'site');

    Auth::routes();
    Route::get('password/update', '\App\Http\Controllers\Auth\UpdatePasswordController@showPasswordUpdateForm')->name('password.update');
    Route::post('password/update', '\App\Http\Controllers\Auth\UpdatePasswordController@update')->name('password.update');
    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

    Route::patch('projects', 'ProjectController@update')->name('projects.update');

    Route::post('clients/{client}', 'ClientController@store');
    Route::patch('clients/{client}', 'ClientController@update');

    Route::get('sourcerors', 'SourcerorController@index')->name('sourcerors.index');
    Route::get('sourcerors/{sourceror}', 'SourcerorController@show')->name('sourcerors.single');

    Route::get('test/auth', 'TestController@authCheck');
});

/*
|--------------------------------------------------------------------------
| App Routes
|--------------------------------------------------------------------------
*/

// Route::group(['middleware' => 'auth'], function () {
Route::domain('app.' . env('APP_DOMAIN'))->group(function () {
    Route::view('/', 'app.home')->name('app.home');

    Route::get('projects', 'ProjectController@showUserProjects')->name('app.projects.index');
    Route::get('projects/{projectSlug}', 'ProjectController@show')->name('app.projects.single');

    Route::get('test', 'TestController@app')->name('app.test');

    Route::post('projects', 'ProjectController@store')->name('projects.store');
    Route::post('users', 'UserController@store')->name('user.store');
});
// });

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => 'can:admin'], function () {
    Route::domain('admin.' . env('APP_DOMAIN'))->group(function () {
        Route::get('/', 'AdminController@home')->name('admin.home');
        Route::get('servers/{slug?}', 'AdminController@servers');
        Route::get('servers-info', 'ServerController@index');
        Route::get('projects/{slug?}', 'AdminController@projects');
        Route::get('clients/{slug?}', 'AdminController@clients');

        Route::post('clients/{slug}/setupwordpress', 'ClientController@setUpWordPress');

        Route::get('projects/{slug}/edit', 'ProjectController@edit')->name('admin.projects.edit');

        Route::get('users', 'UserController@index')->name('admin.users.index');
        Route::get('users/{user}', 'UserController@show')->name('admin.users.single');

        Route::get('test', 'TestController@test');
    });
});
