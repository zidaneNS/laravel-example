<?php

use App\Http\Controllers\JobListController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Models\JobList;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::get('jobs', [JobListController::class, 'index']);
Route::post('jobs', [JobListController::class, 'store']);
Route::get('jobs/create', [JobListController::class, 'create'])->middleware('auth');
Route::get('jobs/{joblist}', [JobListController::class, 'show'])->middleware('auth');
Route::put('jobs/{joblist}', [JobListController::class, 'update'])->can('update', 'joblist');
Route::delete('jobs/{joblist}', [JobListController::class, 'destroy']);
Route::get('jobs/{joblist}/edit', [JobListController::class, 'edit']);

Route::view('contact', 'contact');

Route::get('register', [RegisterController::class, 'create']);
Route::post('register', [RegisterController::class, 'store']);

Route::get('login', [SessionController::class, 'create'])->name('login');
Route::post('login', [SessionController::class, 'store']);
Route::post('logout', [SessionController::class, 'destroy']);