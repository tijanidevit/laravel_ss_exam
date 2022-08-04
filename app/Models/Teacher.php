<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function form() : Form
    {
        return $this->hasOneThrough(Form::class, FormTeacher::class);
    }

    public function user() : User
    {
        return $this->belongsTo(User::class);
    }
}
