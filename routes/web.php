<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest() ->simplePaginate(3);

    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('jobs.show', ['job' => $job]);
});

Route::post('/jobs', function (Request $request) {
    $request->validate([
        'title' => ['required' ,'min:3'] ,
        'salary' => ['required']
    ]);

    Job::create([
        'title' => $request->input('title'),
        'salary' => $request->input('salary'),
        'employer_id' => $request->input('employer_id', 1) // Default to 1 if not provided
    ]);

    return redirect('/jobs')->with('success', 'Job succesvol aangemaakt.');
});

Route::get('/contact', function () {
    return view('contact');
});