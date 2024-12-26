<?php

namespace App\Http\Controllers;

use App\Models\JobList;
use Illuminate\Http\Request;

class JobListController extends Controller
{
    public function index () {
        $jobs = JobList::with('employer')->latest()->simplePaginate(3);
        return view('jobs.index', ['jobs' => $jobs]);
    }

    public function store () {
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
    }

    public function create () {
        return view('jobs.create');
    }

    public function show (JobList $job) {
        return view('jobs.show', ['job' => $job]);
    }

    public function update (JobList $job) {
        // validate
        request()->validate([
            "name" => "required|min:3",
            "pay" => "required"
        ]);
        // authorization
        // update
        JobList::findOrFail($job->id)->update([
            "name" => request()->name,
            "pay" => request()->pay,
            "employer_id" => 1
        ]);
        // redirect
        return redirect('/jobs');
    }

    public function destroy (JobList $job) {
        // authorization
        // delete
        JobList::find( $job->id )->delete();
        // redirect
        return redirect('/jobs');
    }

    public function edit (JobList $job) {
        return view('jobs.edit', ['job' => $job]);
    }
}
