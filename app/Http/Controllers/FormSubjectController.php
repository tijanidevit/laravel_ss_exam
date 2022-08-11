<?php

namespace App\Http\Controllers;

use App\Models\FormSubject;
use Illuminate\Http\Request;

class FormSubjectController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $teacher = $user->teacher;
        $assigned_form = $teacher->form_teacher;
        $form = $assigned_form->form;
        $form_id = $form->id;
        $form_subjects = FormSubject::where('form_id', $form_id)->get();
        $form_subjects->load('subject');
            
        return view('teacher.subjects.all-subjects', compact('form_subjects', 'form'));
    }

    
    public function showExam(FormSubject $formSubject)
    {
        $user = auth()->user();
        $student = $user->student;
        $form_student = $student->form_student;
        $form = $form_student->form;
        
        $subject = $formSubject->subject;
        $questions = $formSubject->questions;
        $form_subject = $formSubject;
        return view('student.exam', compact('subject', 'questions', 'form', 'form_subject'));
    }
}
