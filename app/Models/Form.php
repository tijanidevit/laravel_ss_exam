<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model //This is model is used for Classes
{
    use HasFactory;
    protected $guarded = [];
    
    public function subject() : Subject
    {
        return $this->hasManyThrough(Subject::class, FormSubject::class);
    }
    
    public function student() : Student
    {
        return $this->hasManyThrough(Student::class, FormStudent::class);
    }
    
    public function teacher() : Teacher
    {
        return $this->hasManyThrough(Teacher::class, FormTeacher::class);
    }
}
