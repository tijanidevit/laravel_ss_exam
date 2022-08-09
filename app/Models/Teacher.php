<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function form_teacher() : HasOne
    {
        return $this->HasOne(FormTeacher::class)->orderBy('id', 'desc');
    }

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
