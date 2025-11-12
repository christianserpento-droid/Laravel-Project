<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'student_id',
        'name',
        'email',
        'password',
        'age',
        'average',
        'department',
        'program',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
