<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    protected $model = Student::class;

    public function definition(): array
    {
        $randomYears = random_int(17, 26);
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'gender' => $this->faker->randomElement(['male', 'female', 'other']),
            'date_of_birth' => $this->faker->date('Y-m-d', "-{$randomYears} years"),
            'marital_status' => $this->faker->randomElement(['single', 'married', 'divorced', 'widowed']),
            'county_of_birth' => $this->faker->state(),

            'parent_name' => $this->faker->name('male'),
            'parent_phone' => $this->faker->phoneNumber(),

            'course_id' => null, // will be set in seeder
            'status' => 'pending',
        ];
    }
}
