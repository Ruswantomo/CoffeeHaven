<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// Route::get('/coffee', function () {
//     return view('coffee');
// });

// Route::get('/noncoffee', function () {
//     return view('noncoffee');
// });

// Route::get('/snack', function () {
//     return view('snack');
// });

Route::get('/about', function () {
    return view('about');
});

//route resource
Route::resource('/coffees',\App\Http\Controllers\CoffeeController::class);

//route resource
Route::resource('/noncoffees',\App\Http\Controllers\NonCoffeeController::class);

//route resource
Route::resource('/snacks',\App\Http\Controllers\SnackController::class);

