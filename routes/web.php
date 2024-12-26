<?php

use App\Http\Controllers\JobListController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::resource('jobs', JobListController::class);

Route::view('contact', 'contact');
