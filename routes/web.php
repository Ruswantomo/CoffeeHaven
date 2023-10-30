<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registercontroller;
use App\Http\Controllers\logincontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('register');
});

Route::post('/', function () {
    return view('login');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/coffee', function () {
    return view('coffee');
});

Route::get('/noncoffee', function () {
    return view('noncoffee');
});

Route::get('/snack', function () {
    return view('snack');
});

//route resource
Route::resource('/coffees',\App\Http\Controllers\CoffeeController::class);

//route resource
Route::resource('/noncoffees',\App\Http\Controllers\NonCoffeeController::class);

//route resource
Route::resource('/snacks',\App\Http\Controllers\SnackController::class);

// Route::get('/register', [RegisterController::class, 'create']);
// Route::post('/register', [RegisterController::class, 'store'])->name('register');

Route::get('/', [RegisterController::class, 'create']);
Route::post('/', [RegisterController::class, 'store'])->name('register');

Route::view('/login', 'login')->name('login');

Route::get('/logout', function () {
    auth()->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('/login');
})->name('logout');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');


