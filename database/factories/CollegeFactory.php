<?php

namespace Database\Factories;

use App\Models\College;
use Illuminate\Database\Eloquent\Factories\Factory;

class CollegeFactory extends Factory
{
    protected $model = College::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->company . ' College',
        ];
    }
}

