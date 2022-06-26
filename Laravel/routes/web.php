<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LangController;
use App\Http\Controllers\SurveysController;
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
/*
Route::get('/', function () {
    return view('surveys');
})->middleware(['auth'])->name('surveys');
*/

Route::get('/',[SurveysController::class,'index'])->middleware(['auth'])->name('surveys');

Route::get('/surveyReturn/{phase}/{survey}',[SurveysController::class,'reEnterSurvey'])->middleware(['auth'])->name('surveyReturn');
Route::get('/surveyFirst/{phase}/{survey}',[SurveysController::class,'firstTimeSurvey'])->middleware(['auth'])->name('surveyFirst');

/*
Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
*/

Route::get('/language', function () {
    return view('lang_select');
})->name('language');

/*
Route::get('/', function () {
    return view('lang_select');
});
*/

/*Language Routes*/
//Route::get('lang/home', [LangController::class, 'index']);

Route::get('lang/change', [LangController::class, 'change'])->name('changeLang');