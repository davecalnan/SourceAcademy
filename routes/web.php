<?php

use App\Http\Controllers\UserController;

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
    
    Route::post('projects', 'ProjectController@store')->name('projects.create');
    Route::patch('projects/{slug}', 'ProjectController@update')->name('projects.update');

    Route::post('users', 'UserController@store');

    Route::post('organisations/{organisation}', 'OrganisationController@store');
    Route::patch('organisations/{organisation}', 'OrganisationController@update');

    Route::get('freelancers', 'FreelancerController@index')->name('freelancers.index');
    Route::get('freelancers/{freelancer}', 'FreelancerController@show')->name('freelancers.single');

    Route::post('subscriptions', 'SubscriptionController@store');

    Route::post('done', 'DoneController@store');
});

/*
|--------------------------------------------------------------------------
| Freelancer App Routes
|--------------------------------------------------------------------------
*/

Route::group(['middleware' => 'auth'], function () {
    Route::domain('app.' . env('APP_DOMAIN'))->group(function () {
        Route::get('/', 'AppController@home')->name('app.home');

        Route::get('projects', 'AppController@projects')->name('app.projects.index');
        Route::get('projects/{slug}', 'AppController@project')->name('app.projects.single');

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
        Route::get('servers', 'AdminController@servers')->name('admin.servers.index');
        Route::get('servers/{id}', 'AdminController@server')->name('admin.servers.single');
        Route::get('servers-info', 'ServerController@index');
        
        Route::get('organisations', 'AdminController@organisations')->name('admin.organisations.index');
        Route::get('organisations/{slug}', 'AdminController@organisation')->name('admin.organisations.single');

        Route::post('organisations/{slug}/setupwordpress', 'OrganisationController@setUpWordPress');

        Route::get('projects', 'AdminController@projects')->name('admin.projects.index');
        Route::get('projects/{slug}', 'AdminController@project')->name('admin.projects.single');
        Route::get('projects/{slug}/edit', 'AdminController@editProject')->name('admin.projects.edit');

        Route::get('users', 'AdminController@users')->name('admin.users.index');
        Route::get('users/{user}', 'AdminController@user')->name('admin.users.single');
    });
});

/*
|--------------------------------------------------------------------------
| Customer Dashboard Routes
|--------------------------------------------------------------------------
 */
Route::group(['middleware' => 'auth'], function () {
    Route::domain('dashboard.' . env('APP_DOMAIN'))->group(function () {
        Route::get('/', 'DashboardController@home')->name('dashboard.home');

        Route::get('projects', 'DashboardController@projects')->name('dashboard.projects.index');
        Route::get('projects/{slug}', 'DashboardController@project')->name('dashboard.projects.single');
    });
});

/*
|--------------------------------------------------------------------------
| Redirect Routes
|--------------------------------------------------------------------------
 */
Route::group(['middleware' => 'auth'], function () {
    Route::domain('redirect.' . env('APP_DOMAIN'))->group(function () {
        Route::get('{uri?}', 'RedirectController@redirect')->name('redirect.uri')->where('uri', '.+');
    });
});

// Redirects www URLs to non-www URLs.
Route::domain('www.' . env('APP_DOMAIN'))->group(function () {
    Route::get('{uri?}', 'RedirectController@www')->where('uri', '.+');
});

/*
|--------------------------------------------------------------------------
| Misc Routes
|--------------------------------------------------------------------------
*/
