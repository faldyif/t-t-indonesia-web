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
Route::group(['middleware' => ['isVerified']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('gender', 'EditUserController@indexChooseGender')->name('indexChooseGender');
    Route::get('gender/choose/{gender}', 'EditUserController@chooseGender')->name('chooseGender');
});