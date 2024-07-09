<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Models\JobListing;

Route::get('/', function () {
    dd(JobListing::all());
    return view('home');
});

Route::get('/jobs', function () {
    // return view('jobs', ['listJobs' => Job::all()]);
});

Route::get('/job/{id}', function ($id) {
    // return view('detail-job', ['job' => job::find($id)]);
});

Route::get('/contact', function () {
    return view('contact');
});
