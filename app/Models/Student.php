<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Student extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function form_student() : HasOne
    {
        return $this->HasOne(FormStudent::class)->orderBy('id', 'desc');
    }

    public function user() : BelongsTo{
        return $this->belongsTo(User::class);
    }
}
