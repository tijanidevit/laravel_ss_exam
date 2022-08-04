<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $guarded = [];

    
    public function form() : Form{
        return $this->belongsTo(Form::class);
    }

    public function user() : User{
        return $this->belongsTo(User::class);
    }
}
