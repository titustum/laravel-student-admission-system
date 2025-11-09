<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Department;
use App\Models\Student;
use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    protected $model = Student::class;

    public function definition()
    {
        $faker = Faker::create();
        $faker->addProvider(new \KenyaFaker\Provider\en_KE\Person($faker));
        $faker->addProvider(new \KenyaFaker\Provider\en_KE\PhoneNumber($faker));

        // Random gender
        $gender = $this->faker->randomElement(
            array_merge(array_fill(0, 3, 'male'), array_fill(0, 3, 'female'), ['other'])
        );


        // Random department and course
        $department = Department::inRandomOrder()->first();
        $course = $department ? $department->courses()->inRandomOrder()->first() : null;

        return [
            'admission_number' => $this->faker->unique()->numerify('TTVC-######'),
            'first_name' => $faker->firstName($gender),
            'middle_names' => $faker->optional()->firstName($gender).' '.$faker->optional()->firstName($gender),
            'last_name' => $faker->lastName,
            'photo' => null,
            'gender' => $gender,
            'date_of_birth' => $faker->dateTimeBetween('-25 years', '-15 years')->format('Y-m-d'),
            'email' => $faker->unique()->safeEmail(),
            'phone' => $faker->phoneNumber(),
            'alternative_phone' => $faker->optional()->phoneNumber(),
            'parent_name' => $faker->name(),
            'parent_phone' => $faker->optional()->phoneNumber(),
            'department_id' => $department?->id,
            'course_id' => $course?->id,
            'admission_date' => $faker->dateTimeBetween('-1 years', 'now')->format('Y-m-d'),
            'created_at' => $faker->dateTimeBetween('-1 years', 'now')->format('Y-m-d'),
        ];
    }
}
