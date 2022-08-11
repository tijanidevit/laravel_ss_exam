<?php

namespace App\Http\Controllers;

use App\Models\StudentResult;
use App\Models\FormSubject;
use Illuminate\Http\Request;

class StudentResultController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request, FormSubject $formSubject)
    {
        $user = auth()->user();
        $student = $user->student;
        $form_student = $student->form_student;
        $form = $form_student->form;

        $student_id = $student->id;
        $form_id = $form->id;
    
        $total_questions = $formSubject->questions->count();

        $student_score = 0;

        // dd($request->all());

        for ($i=1; $i <= $total_questions ; $i++) {
            $student_score += $request->input("option$i");            
        }

        dd($student_score);
    }

    
}
