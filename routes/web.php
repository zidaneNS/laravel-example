<?php

use App\Http\Controllers\JobListController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::resource('jobs', JobListController::class);

Route::view('contact', 'contact');

Route::view('register', 'auth.register');
Route::post('register', [SessionController::class, 'store']);

Route::view('login', 'auth.login');
Route::post('login', [SessionController::class, 'login']);