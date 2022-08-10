<?php

namespace App\Http\Controllers;
use App\Models\FormSubject;

use App\Models\ExamQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class ExamQuestionController extends Controller
{
    public function index(FormSubject $formSubject)
    {
        $user = auth()->user();
        $teacher = $user->teacher;
        $assigned_form = $teacher->form_teacher;
        $form = $assigned_form->form;
        $form_id = $form->id;


        $questions = $formSubject->questions;
        $questions->load('options');

        return view('teacher.subjects.questions', compact('questions', 'form'));
    }

    
    public function store(Request $request,FormSubject $formSubject)
    {
        $data = $request->validate([
            'question' => 'required',
            'option1' => 'required',
            'option2' => 'required',
            'option3' => 'required',
            'option4' => 'required',
            'is_answer' => 'required',
        ]);
        DB::transaction(function () use($data, $formSubject)
        {
            $user = auth()->user();
            $teacher = $user->teacher;

            $question_data = Arr::only($data, 'question');
            $question_data['teacher_id'] = $teacher->id;

            $question = $formSubject->questions()->create($question_data);
            for ($i=1; $i <=4 ; $i++) { 
                $option_data = [
                    'option' => $data['option'.$i]
                ];
                if ($i == $data['is_answer']) {
                    $option_data['is_answer'] = 1;
                };

                $question->options()->create($option_data);
            }
        });

        
        return back()->with('success', 'Question added successfully!');
        
    }

    
    public function show(ExamQuestion $examQuestion)
    {
        
    }

    public function destroy(FormSubject $formSubject,ExamQuestion $examQuestion)
    {
        $examQuestion->options()->delete();
        $examQuestion->delete();
        return back()->with('deleted', 'Question deleted successfully!');
    }
}
