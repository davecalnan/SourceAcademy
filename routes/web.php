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

    Route::get('sourcerors', 'SourcerorController@index')->name('sourcerors.index');
    Route::get('sourcerors/{sourceror}', 'SourcerorController@show')->name('sourcerors.single');

    Route::post('resources', 'ResourceController@store')->name('resources.store');
    Route::patch('resources/{resource}', 'ResourceController@update')->name('resources.update');

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

    Route::get('resources', 'ResourceController@index')->name('app.resources.index');

    Route::get('test', 'TestController@app')->name('app.test');

    Route::resource('feedback/requests', 'FeedbackRequestController');
    Route::resource('feedback/options', 'FeedbackOptionController');
    Route::resource('feedback/responses', 'FeedbackResponseController');

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
        Route::get('servers', 'AdminController@servers');

        Route::get('projects', 'ProjectController@index')->name('admin.projects.index');
        Route::get('projects/{projectSlug}', 'ProjectController@show')->name('admin.projects.single');
        Route::get('projects/{projectSlug}/edit', 'ProjectController@edit')->name('admin.projects.edit');

        Route::get('resources', 'ResourceController@index')->name('admin.resources.index');
        Route::get('resources/{resource}', 'ResourceController@show')->name('admin.resources.single');
        Route::get('resources/{resource}/edit', 'ResourceController@edit')->name('admin.resources.edit');
        Route::get('resources/{resource}/delete', 'ResourceController@destroy')->name('resources.delete');

        Route::get('users', 'UserController@index')->name('admin.users.index');
        Route::get('users/{user}', 'UserController@show')->name('admin.users.single');

        Route::get('test', 'TestController@admin')->name('admin.test');
    });
});
