<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class QuestionOption extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function question() : BelongsTo{
        return $this->belongsTo(ExamQuestion::class);
    }
}
