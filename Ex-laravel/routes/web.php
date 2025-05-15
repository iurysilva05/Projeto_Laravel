<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;

Route::get('/',[HomeController::class,'index'])->name('home');


Route::get('/produto', function () {
    return view('produto');
});



Route::get('/login', function () {
    return view('teladelogin');
});
