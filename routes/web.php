<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('static.home');
});


Route::get('/login', function () {
    return view('static.login');
});

Route::get('/registration', function () {
    return view('static.reg');
});