<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\SurveyController;

Route::get('/survey', [SurveyController::class, 'show'])->name('survey.show');
Route::post('/submit', [SurveyController::class, 'submit'])->name('survey.submit');
