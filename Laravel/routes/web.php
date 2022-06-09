<?php

use Illuminate\Support\Facades\Route;
require __DIR__.'/auth.php';
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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/surveys', function () {
    return view('surveys');
})->name('surveys');

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/language', function () {
    return view('lang_select');
})->name('language');

/*
Route::get('/', function () {
    return view('lang_select');
});
*/