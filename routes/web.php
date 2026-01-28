<?php

use App\Http\Controllers\Auth\Register;
use App\Http\Controllers\BasicController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [BasicController::class, 'index'])->name('home');


Route::get('/login', [BasicController::class, 'login'])->name('login');

Route::view('/registration', 'static.reg')
    ->middleware('guest')
    ->name('registration');
 
Route::post('/registration', Register::class)
    ->middleware('guest');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

Route::get('/create', [BasicController::class, 'create'])->name('create');

Route::post('/create', [BasicController::class, 'submit'])->name('create.task');

