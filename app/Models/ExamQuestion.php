<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ExamQuestion extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function form_subject() : BelongsTo{
        return $this->belongsTo(FormSubject::class);
    }


    public function options() : HasMany
    {
        return $this->hasMany(QuestionOption::class);
    }
}
