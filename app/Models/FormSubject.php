<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FormSubject extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function form() : BelongsTo{
        return $this->belongsTo(Form::class);
    }

    public function subject() : BelongsTo{
        return $this->belongsTo(Subject::class);
    }

    public function questions() : HasMany{
        return $this->hasMany(ExamQuestion::class);
    }

    public function examQuestions() : HasMany{
        return $this->hasMany(ExamQuestion::class);
    }
}
