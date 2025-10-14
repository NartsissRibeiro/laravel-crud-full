<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\StudentController;

Route::get('/teste-bootstrap', function () {
    return view('home');
});
//Route::middleware(['auth'])->group(function () {
    //Route::get('/dashboard', function (){
        //return view('dashboard');
Route::resource('courses', CourseController::class);
Route::resource('classrooms', ClassroomController::class);
Route::resource('students', StudentController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//})
//});

