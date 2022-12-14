<?php

namespace App\Models;

use App\Enums\UserRoles;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function teacher() : HasOne
    {
        return $this->hasOne(Teacher::class);
    }

    public function student() : HasOne
    {
        return $this->hasOne(Student::class);
    }

    public function isAdmin() : bool
    {
        return $this->user_role === UserRoles::ADMIN;
    }

    public function isTeacher() : bool
    {
        return $this->user_role === UserRoles::TEACHER;
    }

    public function isStudent() : bool
    {
        return $this->user_role === UserRoles::STUDENT;
    }
}
