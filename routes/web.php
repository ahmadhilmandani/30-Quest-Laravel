<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    $listJobs = [
        [
            'id' => 1,
            'title' => 'Director',
            'salary' => "10.00",
        ],
        [
            'id' => 2,
            'title' => 'Hacker',
            'salary' => "50.00",
        ],
        [
            'id' => 3,
            'title' => 'Hustler',
            'salary' => "500.00",
        ]
    ];

    return view('jobs', ['listJobs' => $listJobs]);
});

Route::get('/job/{id}', function ($id) {
    $listJobs = [
        [
            'id' => 1,
            'title' => 'Director',
            'salary' => '$50,000',
            "description" => "Laravel is an incredible and mature PHP framework that has sky-rocketed in popularity since its initial introduction back in 2012. I'm happy to say that I've been a user and advocate for the framework since the beginning. I'd love to show you the ropes if you're willing! Together, we'll review each piece of the framework, and wrap up by building a Job Board platform where users can post and apply to job listings. Ready to hit the road?"
        ],
        [
            'id' => 2,
            'title' => 'Programmer',
            'salary' => '$10,000',
            "description" => "I remember watching a previous Laravel course (Laravel 8 or 9?), and the information in those videos was so on point. It made learning Laravel a delight. If this video is anything like those before, then you HAVE to watch this!"
        ],
        [
            'id' => 3,
            'title' => 'Teacher',
            'salary' => '$40,000',
            "description" => "I cannot wait to start on this course been learning how to build a custom framework and I think this course will be very helpful thanks Jefrey highly appreciated"
        ]
    ];

    $job = Arr::first($listJobs, function ($singleJob) use ($id) {
        return $singleJob['id'] == $id;
    });

    return view('detail-job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
