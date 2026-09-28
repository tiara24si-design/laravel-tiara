<?php

use Illuminate\Support\Facades\Route;
use App\http\Controlllers\MahasiswaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);
