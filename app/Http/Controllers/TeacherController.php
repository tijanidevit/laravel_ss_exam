<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Services\Teacher\StoreService;
use App\Http\Requests\Teacher\StoreRequest;
use App\Http\Requests\Teacher\FetchService;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = (new FetchService())->run();
        return view('admin.teachers.all-teachers', compact('teachers'));
    }

    public function create()
    {
        return view('admin.teachers.create-teacher');
    }

    public function store(StoreRequest $request)
    {
        try {
            $teacher = (new StoreService($request->all()))->run();
            return back()->with('success', 'Teacher added successfully!');
        } catch (\Exception $ex) {
            return back()->with('error', $ex->getMessage());
        }
    }

    public function show(Teacher $teacher)
    {
        //
    }

    public function edit(Teacher $teacher)
    {
        //
    }

    public function update(Request $request, Teacher $teacher)
    {
        //
    }

    public function destroy(Teacher $teacher)
    {
        //
    }
}
