<?php
namespace App\Services\Student;

use App\Models\Student;

class FetchService{
    protected $student;

    public function __construct($student = null)
    {
        $this->student = $student;
    }

    public function all()
    {
        $students = Student::orderBy('reg_no')->get();
        return $students->load(['user', 'form_student.form']);
    }

    public function one()
    {
        return $this->student->load(['user', 'form_student.form']);
    }
}