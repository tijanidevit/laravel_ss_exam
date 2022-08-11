<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\FormTeacherController;
use App\Http\Controllers\FormSubjectController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExamQuestionController;
use App\Http\Controllers\StudentResultController;
use Illuminate\Support\Facades\Route;


//All Modules
Route::get('/', function () {
    return view('welcome');
});
Route::get('logout', function ()
{
    Auth::logout();
    return redirect('/');
})->middleware(['auth'])->name('logout');


Route::get('admin/login', function ()
{
    return view('admin.auth.login');
});




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








//TEACHER
Route::get('teacher/login', function ()
{
    return view('teacher.auth.login');
})->name('teacher.login');
Route::post('teacher/login', [AuthController::class, 'login'])->name('teacher_login');


Route::middleware(['auth', 'auth.teacher'])->prefix('teacher')->group(function(){
    Route::get('dashboard', [DashboardController::class, 'teacher'])->name('teacher.dashboard');

    Route::get('class', [FormTeacherController::class, 'show'])->name('teacher.class.show');

    Route::get('students/{student}', [StudentController::class, 'show'])->name('teacher.students.show');

    Route::get('subjects/', [FormSubjectController::class, 'index'])->name('teacher.subjects.index');
    Route::get('subjects/{formSubject}', [FormSubjectController::class, 'show'])->name('teacher.subjects.show');

    Route::get('subjects/{formSubject}/questions', [ExamQuestionController::class, 'index'])->name('teacher.subjects.questions');
    Route::post('subjects/{formSubject}/questions', [ExamQuestionController::class, 'store'])->name('teacher.subjects.questions');
    Route::delete('subjects/{formSubject}/questions/{examQuestion}', [ExamQuestionController::class, 'destroy'])->name('teacher.subjects.question.delete')->scopeBindings();

    Route::post('class/assign/{teacher}', [FormTeacherController::class, 'store'])->name('teacher.form-teacher.store');
});





//STUDENT
Route::get('student/login', function ()
{
    return view('student.login');
})->name('student.login');
Route::post('student/login', [AuthController::class, 'login'])->name('student_login');


Route::middleware(['auth', 'auth.student'])->prefix('student')->group(function(){
    Route::get('dashboard', [DashboardController::class, 'student'])->name('student.dashboard');

    Route::get('exams/{formSubject}', [FormSubjectController::class, 'showExam'])->name('student.exams.show');
    
    Route::post('exams/{formSubject}/submit', [StudentResultController::class, 'store'])->name('student.exams.submit');
});
