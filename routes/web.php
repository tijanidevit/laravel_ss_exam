<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\FormTeacherController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('admin/login', function ()
{
    return view('admin.auth.login');
});

Route::get('logout', function ()
{
    Auth::logout();
    return redirect('/');
})->middleware(['auth'])->name('logout');


//ADMIN
Route::get('admin/login', function ()
{
    return view('admin.auth.login');
})->name('admin.login');
Route::post('admin/login', [AuthController::class, 'login'])->name('admin_login');


Route::middleware(['auth', 'auth.admin'])->prefix('admin')->group(function(){
    Route::get('dashboard', [DashboardController::class, 'admin'])->name('admin.dashboard');

    Route::get('students', [StudentController::class, 'index'])->name('admin.students.index');
    Route::get('students/new', [StudentController::class, 'create'])->name('admin.students.create');
    Route::post('students', [StudentController::class, 'store'])->name('admin.students.store');

    

    Route::get('teachers', [TeacherController::class, 'index'])->name('admin.teachers.index');
    Route::get('teachers/new', [TeacherController::class, 'create'])->name('admin.teachers.create');
    Route::post('teachers', [TeacherController::class, 'store'])->name('admin.teachers.store');
    Route::get('teachers/{teacher}', [TeacherController::class, 'show'])->name('admin.teachers.show');


    Route::post('class/assign/{teacher}', [FormTeacherController::class, 'store'])->name('admin.form-teacher.store');
});
