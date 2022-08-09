<?php

namespace App\Http\Controllers;

use App\Models\FormTeacher;
use App\Models\Teacher;
use App\Models\FormStudent;
use App\Http\Requests\FormTeacher\StoreRequest;

class FormTeacherController extends Controller
{ 
    public function store(StoreRequest $request, Teacher $teacher)
    {
        $data = $request->validated();
        $form_id = $data['form_id'];
        $teacher->form_teacher()->updateOrCreate($data);
        return back()->with('success', 'Class successfully assigned to teacher');
    }

    public function show()
    {
        $teacher = auth()->user()->teacher;
        $assigned_form = $teacher->form_teacher;
        $form = $assigned_form->form;
        
        $form_id = $form->id;
        $form_students = FormStudent::where('form_id', $form_id)->get();
        
        if ($form_students) {
            $form_students->load('student.user');
        }

        return view('teacher.forms.show-class', compact('form', 'form_students'));
    }
}
