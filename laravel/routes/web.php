<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bnspController;

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

Route::post('/confirm', function () {
    return view('confirm');
})->name('confirm');

Route::resource('bnsp', bnspController::class);

Route::get('/hasil', function () {
    return view('hasil');
})->name('hasil');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
