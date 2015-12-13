<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['prefix' => \Flare::config('admin_url')], function () {
    // Admin routes should really have auth filter, or actually, our own permissions filter.
    (new \LaravelFlare\Flare\Admin\AdminManager())->registerRoutes();

    // Admin Default Routes, make sure not to ovverride!
    Route::controller('/', '\LaravelFlare\Flare\Http\Controllers\AdminController');
});
