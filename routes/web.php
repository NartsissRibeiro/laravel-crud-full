<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\StudentController;


Route::get('/teste-bootstrap', function () {
    return view('home');
});

Route::resource('courses', CourseController::class);
Route::resource('classrooms', ClassroomController::class);
Route::resource('students', StudentController::class);
