<?php

use App\Http\Controllers\ClassController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\SecondaryPasswordController;
use App\Http\Controllers\StudentDashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentsController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', fn () => view('home'));

Route::get('absent', [StudentsController::class, 'absent']);
Route::get('profile', [StudentsController::class, 'index']);

Route::get('/dashboard', function () {
    $title = "Dashboard";
    return view('dashboard.home', compact('title'));
});
Route::resource('/dashboard/classes', ClassController::class)->except('show');
Route::resource('/dashboard/teachers', TeacherController::class);

Route::resource('/dashboard/students', StudentDashboardController::class);
Route::get('/dashboard/secondaryPasswords/{secondaryPassword:student_id}', [SecondaryPasswordController::class, 'showPassword']);
Route::put('/dashboard/students/uploadimage/{student:id}', [StudentDashboardController::class, 'uploadImage'])->name('student_upload_image');

Route::resource('/dashboard/schedules', ScheduleController::class)->except('show');
Route::get('/dashboard/days/{days:id}/classes/{classes:id}', [ScheduleController::class, 'show']);
Route::delete('/dashboard/days/{days:id}/classes/{classes:id}', [ScheduleController::class, 'destroy']);
