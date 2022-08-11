<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\FormStudent;
use App\Models\FormSubject;
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
    
    public function teacher()
    {
        $user = auth()->user();
        $teacher = $user->teacher;
        $assigned_form = $teacher->form_teacher;
        if($assigned_form){
            $forms_count = 1;
            $form = $assigned_form->form;
            $form_id = $form->id;
            $students_count = FormStudent::where('form_id', $form_id)->count();
            $subjects_count = FormSubject::where('form_id', $form_id)->count();
            
            return view('teacher.dashboard', compact(['students_count', 'forms_count', 'subjects_count']));
        }
        else {
            return view('no-class');
        }        
    }

    public function student()
    {
        $user = auth()->user();
        $student = $user->student;
        $form_student = $student->form_student;
        if($form_student){
            $form = $form_student->form;
            $form_id = $form->id;
            $form_subjects = FormSubject::where('form_id', $form_id)->get();

            $form_subjects->load('subject');
            
            return view('student.dashboard', compact(['form_subjects']));
        }
        else {
            return view('no-class');
        }        
    }
}
