<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Models\JobListing;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    $job = JobListing::with('employer')->latest()->simplePaginate(3);
    return view('jobs/index', ['listJobs' => $job]);
});


Route::post('/job', function () {

    request()->validate([
        'title' => ['required'],
        'salary' => ['required'],
        'description' => ['required'],
    ]);

    JobListing::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1,
        'description' => request('description'),
    ]);

    return redirect('/jobs');
});

Route::get('/job/create', function () {
    return view('jobs/create');
});

Route::get('/job/{id}', function ($id) {
    return view('jobs/show', ['job' => JobListing::find($id)]);
});

Route::get('/job/{id}/edit', function ($id) {
    return view('jobs/edit', ['job' => JobListing::find($id)]);
});

Route::patch('/job/{id}', function ($id) {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
        'description' => ['required'],
    ]);

    // authorize (On hold...)

    $job = JobListing::findOrFail($id);

    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
        'description' => request('description'),
    ]);

    return redirect('/job/' . $job->id);
});


Route::delete('/job/{id}', function ($id) {
    $job = JobListing::findOrFail($id);
    $job->delete();

    return redirect('/jobs');
});

Route::get('/contact', function () {
    return view('contact');
});
