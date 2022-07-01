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
*/

Route::get('/',[SurveysController::class,'index'])->middleware(['auth','verified'])->name('surveys');

Route::get('/surveyReturn/{phase}/{survey}',[SurveysController::class,'reEnterSurvey'])->middleware(['auth'])->name('surveyReturn');
Route::get('/surveyFirst/{phase}/{survey}',[SurveysController::class,'firstTimeSurvey'])->middleware(['auth'])->name('surveyFirst');


Route::get('/language', function () {
    return view('lang_select');
})->name('language');


/*Language Routes*/
//Route::get('lang/home', [LangController::class, 'index']);

Route::get('lang/change', [LangController::class, 'change'])->name('changeLang');