<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    protected $model = Course::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->jobTitle . ' Course',
            'college_id' => null, // Set in seeder
        ];
    }
}
