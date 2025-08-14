<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'gender',
        'date_of_birth',
        'marital_status',
        'county_of_birth',
        'parent_name',
        'parent_phone',
        'course_id',
        'status',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}

