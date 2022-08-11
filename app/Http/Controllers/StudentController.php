<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\StudentResult;
use App\Models\Form;
use App\Services\Student\StoreService;
use App\Services\Student\FetchService;
use App\Http\Requests\Student\StoreRequest;

class StudentController extends Controller
{
    public function index()
    {
        $students = (new FetchService())->all();
        return view('admin.students.all-students', compact('students'));
    }

    public function create()
    {
        $forms = Form::all();
        return view('admin.students.create-student', compact('forms'));
    }

    public function store(StoreRequest $request)
    {
        try {
            $student = (new StoreService($request->validated()))->run();
            return back()->with('success', 'Student added successfully!');
        } catch (\Exception $ex) {
            return back()->with('error', $ex->getMessage());
        }
    }

    public function show(student $student)
    {
        $student = (new FetchService($student))->one();
        $forms = Form::all();
        return view('admin.students.show-student', compact('student','forms'));
    }

    public function showTeacher(student $student)
    {
        $student = (new FetchService($student))->one();
        $form_id = $student->form_student->form_id;

        $results = StudentResult::where([
            'student_id' => $student->id,
            'form_id' => $form_id
        ])->get();
        $results->load('subject');
        return view('teacher.students.show-student', compact('student','results'));
    }
}
