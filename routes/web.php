<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

Route::get('/teste-bootstrap', function () {
    return view('home');
});

Route::resource('courses', CourseController::class);
