<?php

namespace App\Http\Controllers;

use App\Models\FormStudent;
use Illuminate\Http\Request;

class FormStudentController extends Controller
{
    
    public function index()
    {
        $user = auth()->user();
        $teacher = $user->teacher;
        $assigned_form = $teacher->form_teacher;
        $form = $assigned_form->form;
        $form_id = $form->id;
        $students_count = FormStudent::where('form_id', $form_id)->count();
        $subjects_count = FormSubject::where('form_id', $form_id)->count();
            
        return view('teacher.dashboard', compact());
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FormStudent  $formStudent
     * @return \Illuminate\Http\Response
     */
    public function show(FormStudent $formStudent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FormStudent  $formStudent
     * @return \Illuminate\Http\Response
     */
    public function edit(FormStudent $formStudent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FormStudent  $formStudent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormStudent $formStudent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FormStudent  $formStudent
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormStudent $formStudent)
    {
        //
    }
}
