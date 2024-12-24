<?php

use App\Models\JobList;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    $jobs = JobList::all();
    return view('jobs', ["jobs" => $jobs]);
});

Route::get('/job/{id}', function ($id) {

    $job = JobList::find($id);
    
    return view('job', ["job" => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});