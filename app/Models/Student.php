<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'admission_number',
        'first_name',
        'middle_names',
        'last_name',
        'photo',
        'gender',
        'birth_date',
        'email',
        'phone',
        'alternative_phone',
        'parent_name',
        'parent_phone',
        'department_id',
        'course_id',
        'admission_date',
    ];

    /**
     * Department the student belongs to
     */
    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }

    /**
     * Course the student is enrolled in
     */
    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    /**
     * Get full name
     */
    public function getFullNameAttribute(): string
    {
        return "{$this->first_name} {$this->middle_names} {$this->last_name}";
    }
}
