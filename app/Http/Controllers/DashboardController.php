<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Form;
use App\Models\Subject;

class DashboardController extends Controller
{
    public function admin()
    {
        $students_count = Student::count();
        $teachers_count = Teacher::count();
        $forms_count = Form::count();
        $subjects_count = Subject::count();
        return view('admin.dashboard', compact(['students_count', 'teachers_count', 'forms_count', 'subjects_count']));
    }
}
