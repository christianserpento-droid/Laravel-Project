<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'teacher_id', 
        'department_id',
        'specialization',
        'phone'
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}