<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('home');
});



Route::get('/produto', function () {
    return view('produto');
});



Route::get('/login', function () {
    return view('teladelogin');
});
