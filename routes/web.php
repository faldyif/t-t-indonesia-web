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
Route::get('home', function () {
    if(\Illuminate\Support\Facades\Auth::user()->userType() == 'admin')
        return redirect('admin');
    else
        return redirect('dashboard');
})->middleware('auth');

// Authentication Routes
Auth::routes();
Route::get('registration-success', function() {
    return view('auth.registration-success');
});

// Verified User Only
Route::group(['middleware' => ['auth', 'isVerified'], 'prefix' => 'dashboard'], function () {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/', function () {
        return view('user.dashboard');
    })->name('dashboard.index');
});

// Admin User Only
Route::group(['middleware' => ['auth', 'isAdmin'], 'prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard.index');
    Route::get('/botman/register', 'AdminBotManController@registerTelegram')->name('admin.telegram.register');

    Route::resource('ikhwan', 'UserIkhwanController');
    Route::resource('akhwat', 'UserAkhwatController');
});

// Testing routes
Route::get('tes-create', function () {
    $userIkhwan = new \App\UserAkhwat;
    $userIkhwan->user_id = 1;
    $userIkhwan->save();

    return response()->json($userIkhwan);
});
Route::get('tes-fetch', function () {
    $userIkhwan = \App\UserAkhwat::find(1);

    return response()->json($userIkhwan->isDataLengkap());
});

Route::get('/say', function() {
    $botman = resolve('botman');
    $botman->say('sorry spam ti', '-287124341', \BotMan\Drivers\Telegram\TelegramDriver::class);
});
Route::match(['get', 'post'], '/botman', 'BotManController@handle');
Route::get('/botman/tinker', 'BotManController@tinker');

