<?php

namespace App\Http\Controllers;

use App\Models\JobList;
use Illuminate\Support\Facades\Auth;

class JobListController extends Controller
{
    public function index () {
        $joblist = JobList::with('employer')->latest()->simplePaginate(3);
        return view('jobs.index', ['joblist' => $joblist]);
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
            "employer_id" => Auth::user()->employer->id
        ]);
        // redirect
        return redirect('/jobs');
    }

    public function create () {
        return view('jobs.create');
    }

    public function show (JobList $joblist) {
        return view('jobs.show', ['joblist' => $joblist]);
    }

    public function update (JobList $joblist) {
        // validate
        request()->validate([
            "name" => "required|min:3",
            "pay" => "required"
        ]);
        // authorization
        // update
        JobList::findOrFail($joblist->id)->update([
            "name" => request()->name,
            "pay" => request()->pay,
            "employer_id" => $joblist->employer->id
        ]);
        // redirect
        return redirect('/jobs');
    }

    public function destroy (JobList $joblist) {
        // authorization
        // delete
        JobList::find( $joblist->id )->delete();
        // redirect
        return redirect('/jobs');
    }

    public function edit (JobList $joblist) {
        return view('jobs.edit', ['joblist' => $joblist]);
    }
}
