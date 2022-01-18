<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;


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

Route::get('/', function () {
    // dd(Auth::user());
    return view('welcome');
});
Route::group(['prefix' => 'student', 'middleware' => ['student']], function () {
    Route::get('/home', [LoginController::class, 'StudentHome']);
});
Route::group(['prefix' => 'teacher', 'middleware' => ['teacher']], function () {
    Route::get('/home', [LoginController::class, 'TeacherHome']);
    Route::get('/add_student', [StudentController::class, 'StudentPage']);
    Route::post('/add_student', [StudentController::class, 'StudentPageSubmit']);
    Route::get('/teacher_list', [StudentController::class, 'StudentList']);
    Route::get('/student_edit/{id?}', [StudentController::class, 'StudentShow']);
    Route::post('/student_edit/{id?}', [StudentController::class, 'StudentEdit']);
    Route::get('/student_delete/{id?}', [StudentController::class, 'StudentDelete']);
    Route::get('/attendence', [StudentController::class, 'AttendencePage']);
    Route::get('/take-attendence', [StudentController::class, 'AttendenceTake']);
    Route::post('/submit_attendence', [StudentController::class, 'SubmitAttendence']);
    Route::get('/attendence-report', [StudentController::class, 'AttendenceReport']);
});
Route::group(['prefix' => 'admin', 'middleware' => ['admin']], function () {
      Route::get('/home', [LoginController::class, 'Home']);
      Route::get('/add_teacher', [TeacherController::class, 'TeacherPage']);
      Route::post('/add_teacher', [TeacherController::class, 'TeacherPageSubmit']);
      Route::get('/teacher_list', [TeacherController::class, 'TeacherList']);
      Route::get('/teacher_edit/{id?}', [TeacherController::class, 'TeacherShow']);
      Route::post('/teacher_edit/{id?}', [TeacherController::class, 'TeacherEdit']);
      Route::get('/teacher_delete/{id?}', [TeacherController::class, 'TeacherDelete']);
      Route::get('/add_course', [CourseController::class, 'CoursePage']);
      Route::post('/add_course', [CourseController::class, 'CoursePageSubmit']);
      Route::get('/course_list', [CourseController::class, 'CourseList']);
      Route::get('/course_edit/{id?}', [CourseController::class, 'CourseShow']);
      Route::post('/course_edit/{id?}', [CourseController::class, 'CourseEdit']);
      Route::get('/course_delete/{id?}', [CourseController::class, 'CourseDelete']);
      Route::get('/logout', [LoginController::class, 'Logout'])->name('logout');
});
Route::get('/login', [LoginController::class, 'PageLogin']);
Route::post('/login', [LoginController::class, 'Login'])->name('login');
Route::get('/logout', [LoginController::class, 'Logout'])->name('logout');
