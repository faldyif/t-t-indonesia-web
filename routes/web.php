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
Route::get('registration-success', 'UserController@registrationSuccess');

// Verified User that logged in Only
Route::group(['middleware' => ['auth', 'isVerified'], 'prefix' => 'dashboard'], function () {
    Route::get('/welcome', 'UserController@welcome')->name('user.welcome'); // Pengisian profil pertama
    Route::post('/welcome', 'UserController@welcomeStore')->name('user.welcome.store'); // Pengisian profil pertama

    // Khusus untuk yang sudah mengisi profil pertama kali
    Route::group(['middleware' => ['firstLoginChecker']], function () {
        Route::get('/', function () {
            return view('user.dashboard');
        })->name('user.dashboard'); // Home page
        Route::get('/home', 'HomeController@index')->name('home'); // Home page
        Route::get('/profile', 'UserController@index')->name('user.profile'); // Halaman profil pribadi
        Route::get('/profile/edit', 'UserController@editProfile')->name('user.profile.edit'); // Halaman profil pribadi
    });

});

// Admin User Only
Route::group(['middleware' => ['auth', 'isAdmin'], 'prefix' => 'admin', 'namespace' => 'Admin'], function () {
    // Has gender only
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard.index');
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

Route::get('profil', function()
{
    return View::make('auth.passwords.reset')->with('token', 123);
});
Route::get('tes', 'UserIkhwanController@index');

Route::get('detail', function()
{
    return View::make('user/data_akhwat');
});
