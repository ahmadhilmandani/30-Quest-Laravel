<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Models\JobListing;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    // $job = JobListing::with('employer')->get();
    $job = JobListing::with('employer')->simplePaginate(3);
    return view('jobs', ['listJobs' => $job]);
});

Route::get('/job/{id}', function ($id) {
    return view('detail-job', ['job' => JobListing::find($id)]);
});

Route::get('/contact', function () {
    return view('contact');
});
