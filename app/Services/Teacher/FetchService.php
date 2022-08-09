<?php
namespace App\Services\Teacher;

use App\Models\Teacher;

class FetchService{
    protected $teacher;

    public function __construct($teacher = null)
    {
        $this->teacher = $teacher;
    }

    public function all()
    {
        $teachers = Teacher::orderBy('staff_id')->get();
        return $teachers->load(['user', 'form_teacher.form']);
    }

    public function one()
    {
        return $this->teacher->load(['user', 'form_teacher.form']);
    }
}