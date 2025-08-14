<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\Course;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        $courses = Course::all();

        if ($courses->isEmpty()) {
            $this->command->warn('No courses found. Please seed courses before students.');
            return;
        }

        foreach ($courses as $course) {
            Student::factory()->count(5)->create([
                'course_id' => $course->id,
                'status' => 'approved',
            ]);
        }
    }
}
