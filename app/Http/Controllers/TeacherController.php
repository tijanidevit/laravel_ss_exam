<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Form;
use App\Services\Teacher\StoreService;
use App\Services\Teacher\FetchService;
use App\Http\Requests\Teacher\StoreRequest;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = (new FetchService())->all();
        return view('admin.teachers.all-teachers', compact('teachers'));
    }

    public function create()
    {
        return view('admin.teachers.create-teacher');
    }

    public function store(StoreRequest $request)
    {
        try {
            $teacher = (new StoreService($request->validated()))->run();
            return back()->with('success', 'Teacher added successfully!');
        } catch (\Exception $ex) {
            return back()->with('error', $ex->getMessage());
        }
    }

    public function show(Teacher $teacher)
    {
        $teacher = (new FetchService($teacher))->one();
        $forms = Form::all();
        return view('admin.teachers.show-teacher', compact('teacher','forms'));
    }
}
