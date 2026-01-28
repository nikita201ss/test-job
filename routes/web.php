<?php

use App\Http\Controllers\BasicController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [BasicController::class, 'index'])->name('home');


Route::get('/login', [BasicController::class, 'login'])->name('login');

Route::get('/registration', [BasicController::class, 'registration'])->name('registration');

Route::get('/create', [BasicController::class, 'create'])->name('create');

Route::post('/create', [BasicController::class, 'submit'])->name('create.task');

