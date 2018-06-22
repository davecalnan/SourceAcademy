<?php

use App\Http\Controllers\UserController;

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
| Root Domain / Marketing Site Routes
|--------------------------------------------------------------------------
*/

Route::domain(env('APP_DOMAIN'))->group(function () {
    // Pages
    Route::get('/', 'SiteController@home')->name('site.home');
    Route::get('about', 'SiteController@about');

    Route::get('freelancers', 'SiteController@freelancers');
    Route::get('freelancers/{freelancer}', 'SiteController@freelancer');

    Route::view('apply', 'site.apply')->name('site.apply');

    Route::get('signup', 'SignupController@signup')->name('organisation.signup');
    Route::get('signup/{step?}', 'SignupController@step')->name('organisation.signup.step');
    Route::post('signup/{step}', 'SignupController@action')->name('organisation.signup.action');

    Route::view('site', 'site');

    Auth::routes();
    Route::get('password/update', '\App\Http\Controllers\Auth\UpdatePasswordController@showPasswordUpdateForm')->name('password.update');
    Route::post('password/update', '\App\Http\Controllers\Auth\UpdatePasswordController@update')->name('password.update');
    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

    Route::patch('projects', 'ProjectController@update')->name('projects.update');

    Route::post('organisations/{organisation}', 'OrganisationController@store');
    Route::patch('organisations/{organisation}', 'OrganisationController@update');

    Route::get('freelancers', 'FreelancerController@index')->name('freelancers.index');
    Route::get('freelancers/{freelancer}', 'FreelancerController@show')->name('freelancers.single');

    Route::post('subscriptions', 'SubscriptionController@store');

    // Temp
    Route::get('test/auth', 'TestController@authCheck');
});

/*
|--------------------------------------------------------------------------
| Freelancer App Routes
|--------------------------------------------------------------------------
*/

Route::group(['middleware' => 'auth'], function () {
    Route::domain('app.' . env('APP_DOMAIN'))->group(function () {
        Route::get('/', 'AppController@dashboard')->name('app.dashboard');

        Route::get('projects', 'ProjectController@showUserProjects')->name('app.projects.index');
        Route::get('projects/{projectSlug}', 'ProjectController@show')->name('app.projects.single');

        Route::get('test', 'TestController@app')->name('app.test');

        Route::post('projects', 'ProjectController@store')->name('projects.store');
        Route::post('users', 'UserController@store')->name('user.store');
    });
});

/*
|--------------------------------------------------------------------------
| Admin Panel Routes
|--------------------------------------------------------------------------
*/

Route::group(['middleware' => 'can:admin'], function () {
    Route::domain('admin.' . env('APP_DOMAIN'))->group(function () {
        Route::get('/', 'AdminController@home')->name('admin.home');
        Route::get('servers/{slug?}', 'AdminController@servers');
        Route::get('servers-info', 'ServerController@index');
        Route::get('projects/{slug?}', 'AdminController@projects');
        Route::get('organisations/{slug?}', 'AdminController@organisations');

        Route::post('organisations/{slug}/setupwordpress', 'OrganisationController@setUpWordPress');

        Route::get('projects/{slug}/edit', 'ProjectController@edit')->name('admin.projects.edit');

        Route::get('users', 'UserController@index')->name('admin.users.index');
        Route::get('users/{user}', 'UserController@show')->name('admin.users.single');

        Route::get('test', 'TestController@test');
    });
});
