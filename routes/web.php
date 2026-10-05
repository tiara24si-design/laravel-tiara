<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\QuestionController;
use App\Http\Controllers\HomeController;

Route:: get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index']);

Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');
