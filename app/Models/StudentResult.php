<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentResult extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function subject(){
        return $this->belongsTo(Subject::class);
    }
    
    public function student(){
        return $this->belongsTo(Student::class);
    }
}
