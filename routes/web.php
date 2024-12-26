<?php

use App\Models\JobList;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    $jobs = JobList::with('employer')->latest()->simplePaginate(3);
    return view('jobs.index', ["jobs" => $jobs]);
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::post('/jobs', function () {
    // validate
    request()->validate([
        "name" => "required|min:3",
        "pay" => "required"
    ]);
    // create
    JobList::create([
        "name" => request()->name,
        "pay" => request()->pay,
        "employer_id" => 1
    ]);
    // redirect
    return redirect('/jobs');
});

Route::put('jobs/{id}', function ($id) {
    // validate
    request()->validate([
        "name" => "required|min:3",
        "pay" => "required"
    ]);
    // authorization
    // update
    JobList::findOrFail($id)->update([
        "name" => request()->name,
        "pay" => request()->pay,
        "employer_id" => 1
    ]);
    // redirect
    return redirect('/jobs');
});

Route::delete('jobs/{id}', function ($id) {
    // authorization
    // delete
    JobList::find( $id )->delete();
    // redirect
    return redirect('/jobs');
});

Route::get('/jobs/{id}/update', function ($id) {
    $job = JobList::find($id);

    return view('jobs.update', ["job" => $job]);
});

Route::get('/jobs/{id}', function ($id) {

    $job = JobList::find($id);

    return view('jobs.show', ["job" => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
