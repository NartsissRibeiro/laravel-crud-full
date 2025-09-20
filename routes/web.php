<?php

use Illuminate\Support\Facades\Route;

Route::get('/teste-bootstrap', function () {
    return view('home');
});

Route::resource('courses', CourseController::class);
