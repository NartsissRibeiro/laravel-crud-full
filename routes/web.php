<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\StudentController;

Auth::routes();

Route::get('/teste-bootstrap', function () {
    return view('home');
});

Route::get('/dashboard', function () {
  return view('dashboard/dashboard');
 });
//Route::middleware(['auth'])->group(function () {
    //Route::get('/dashboard', function (){ 
        //return view('dashboard');
        //})->name('dashboard');
        
Route::resource('courses', CourseController::class);
Route::resource('classrooms', ClassroomController::class);
Route::resource('students', StudentController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//});
