<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Services\Teacher\StoreService;
use App\Http\Requests\Teacher\StoreRequest;

class TeacherController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('admin.teachers.create-teacher');
    }

    public function store(StoreRequest $request)
    {
        try {
            $teacher = (new StoreService($request->all()))->run();
            dd($teacher);
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
