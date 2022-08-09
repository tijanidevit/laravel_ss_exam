<?php

namespace App\Http\Controllers;

use App\Models\FormTeacher;
use App\Models\Teacher;
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

}
