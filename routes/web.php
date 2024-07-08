<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', ['listJobs' => Job::all()]);
});

Route::get('/job/{id}', function ($id) {
    return view('detail-job', ['job' => job::find($id)]);
});

Route::get('/contact', function () {
    return view('contact');
});
