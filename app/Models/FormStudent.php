<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FormStudent extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function form() : BelongsTo{
        return $this->belongsTo(Form::class);
    }

    public function student() : BelongsTo{
        return $this->belongsTo(Student::class);
    }
}
