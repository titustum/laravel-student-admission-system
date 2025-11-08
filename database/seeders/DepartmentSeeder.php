<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    public function run(): void
    {
        $departments = [
            'Cosmetology',
            'Hospitality',
            'Fashion and Textile',
            'Building and Civil',
            'Electrical',
            'ICT',
            'Agriculture',
            'Mechanical',
        ];

        foreach ($departments as $deptName) {
            Department::create([
                'name' => $deptName,
                'description' => $deptName.' department at Tetu TVC',
            ]);
        }
    }
}
