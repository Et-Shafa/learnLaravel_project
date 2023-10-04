<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

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
    return view('dashboard');
});

Route::get('dashboard', function () {
    return view('dashboard');
});


Route::get('buttons', function () {
    return view('buttons');
});

Route::get('cards', function () {
    return view('cards');
});


Route::get('colors', function () {
    return view('utilities-color');
});

Route::get('borders', function () {
    return view('utilities-border');
});

Route::get('animations', function () {
    return view('utilities-animation');
});

Route::get('other', function () {
    return view('utilities-other');
});


Route::get('login', function () {
    return view('login');
});

Route::get('register', function () {
    return view('register');
});

Route::get('forgot-password', function () {
    return view('forgot-password');
});

Route::get('404', function () {
    return view('404');
});

Route::get('blank', function () {
    return view('blank');
});



Route::get('charts', function () {
    return view('charts');
});

Route::get('tables', function () {
    return view('tables');
});


Route::resource('buku', BukuController::class);
