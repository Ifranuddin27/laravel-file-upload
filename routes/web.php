<?php

use App\Http\Controllers\profileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile/{id}',[profileController::class,'index']);