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

// Home Route
Route::get('/', function () {
    return view('index');
});

// Authentication Routes
Auth::routes();
Route::get('registration-success', function() {
    return view('auth.registration-success');
});

// Verified User Only
Route::group(['middleware' => ['auth', 'isVerified'], 'prefix' => 'dashboard'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('gender', 'EditUserController@indexChooseGender')->name('dashboard.user.gender');
    Route::get('gender/choose/{gender}', 'EditUserController@chooseGender')->name('dashboard.user.gender.update');

    // Has gender only
    Route::group(['middleware' => ['hasGender']], function () {
        Route::get('/', function () {
            return view('user.dashboard');
        })->name('dashboard.index');
    });
});