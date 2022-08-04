<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionOption extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function question() : ExamQuestion{
        return $this->belongsTo(ExamQuestion::class);
    }
}
