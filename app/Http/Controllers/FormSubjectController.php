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
}
