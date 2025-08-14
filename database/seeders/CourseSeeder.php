<?php

namespace Database\Seeders;

use App\Models\College;
use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        $colleges = College::all();

        if ($colleges->isEmpty()) {
            $this->command->warn('No colleges found. Please seed colleges before courses.');
            return;
        }

        foreach ($colleges as $college) {
            Course::factory()->count(4)->create([
                'college_id' => $college->id,
            ]);
        }
    }
}

