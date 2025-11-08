<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Department;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        $courses = [
            // Cosmetology
            ['department' => 'Cosmetology', 'name' => 'Beauty Therapy Level 6', 'code' => 'BTL6', 'level' => '6', 'description' => 'Beauty Therapy Level 6 course'],
            ['department' => 'Cosmetology', 'name' => 'Beauty Therapy Level 5', 'code' => 'BTL5', 'level' => '5', 'description' => 'Beauty Therapy Level 5 course'],
            ['department' => 'Cosmetology', 'name' => 'Beauty Therapy Level 4', 'code' => 'BTL4', 'level' => '4', 'description' => 'Beauty Therapy Level 4 course'],
            ['department' => 'Cosmetology', 'name' => 'Hairdressing Level 6', 'code' => 'HDL6', 'level' => '6', 'description' => 'Hairdressing Level 6 course'],
            ['department' => 'Cosmetology', 'name' => 'Hairdressing Level 5', 'code' => 'HDL5', 'level' => '5', 'description' => 'Hairdressing Level 5 course'],
            ['department' => 'Cosmetology', 'name' => 'Hairdressing Level 4', 'code' => 'HDL4', 'level' => '4', 'description' => 'Hairdressing Level 4 course'],

            // Hospitality
            ['department' => 'Hospitality', 'name' => 'Baking Technology Level 6', 'code' => 'BT6', 'level' => '6', 'description' => 'Baking Technology Level 6 course'],
            ['department' => 'Hospitality', 'name' => 'Baking Technology Level 5', 'code' => 'BT5', 'level' => '5', 'description' => 'Baking Technology Level 5 course'],
            ['department' => 'Hospitality', 'name' => 'Baking Technology Level 4', 'code' => 'BT4', 'level' => '4', 'description' => 'Baking Technology Level 4 course'],
            ['department' => 'Hospitality', 'name' => 'Food & Beverage Sales and Service Management Level 6', 'code' => 'FBSSM6', 'level' => '6', 'description' => 'FBSSM Level 6 course'],
            ['department' => 'Hospitality', 'name' => 'Food & Beverage Sales and Service Management Level 5', 'code' => 'FBSSM5', 'level' => '5', 'description' => 'FBSSM Level 5 course'],
            ['department' => 'Hospitality', 'name' => 'Food & Beverage Sales and Service Management Level 4', 'code' => 'FBSSM4', 'level' => '4', 'description' => 'FBSSM Level 4 course'],
            ['department' => 'Hospitality', 'name' => 'Housekeeping and Accommodation Level 6', 'code' => 'HA6', 'level' => '6', 'description' => 'Housekeeping Level 6 course'],
            ['department' => 'Hospitality', 'name' => 'Housekeeping and Accommodation Level 5', 'code' => 'HA5', 'level' => '5', 'description' => 'Housekeeping Level 5 course'],
            ['department' => 'Hospitality', 'name' => 'Housekeeping and Accommodation Level 4', 'code' => 'HA4', 'level' => '4', 'description' => 'Housekeeping Level 4 course'],

            // Fashion and Textile
            ['department' => 'Fashion and Textile', 'name' => 'Fashion Design Management Level 6', 'code' => 'FDM6', 'level' => '6', 'description' => 'Fashion Design Management Level 6 course'],
            ['department' => 'Fashion and Textile', 'name' => 'Fashion Design Level 5', 'code' => 'FD5', 'level' => '5', 'description' => 'Fashion Design Level 5 course'],
            ['department' => 'Fashion and Textile', 'name' => 'Fashion Design Level 4', 'code' => 'FD4', 'level' => '4', 'description' => 'Fashion Design Level 4 course'],

            // Building and Civil
            ['department' => 'Building and Civil', 'name' => 'Civil Engineering Level 6', 'code' => 'CE6', 'level' => '6', 'description' => 'Civil Engineering Level 6 course'],
            ['department' => 'Building and Civil', 'name' => 'Building Technician Level 6', 'code' => 'BTCH6', 'level' => '6', 'description' => 'Building Technician Level 6 course'],
            ['department' => 'Building and Civil', 'name' => 'Building Level 4', 'code' => 'B4', 'level' => '4', 'description' => 'Building Level 4 course'],
            ['department' => 'Building and Civil', 'name' => 'Masonry Level 4', 'code' => 'M4', 'level' => '4', 'description' => 'Masonry Level 4 course'],
            ['department' => 'Building and Civil', 'name' => 'Construction Management Level 6', 'code' => 'CM6', 'level' => '6', 'description' => 'Construction Management Level 6 course'],
            ['department' => 'Building and Civil', 'name' => 'Construction Survey Level 4', 'code' => 'CS4', 'level' => '4', 'description' => 'Construction Survey Level 4 course'],
            ['department' => 'Building and Civil', 'name' => 'Carpentry and Joinery Level 6', 'code' => 'CJ6', 'level' => '6', 'description' => 'Carpentry and Joinery Level 6 course'],
            ['department' => 'Building and Civil', 'name' => 'Carpentry and Joinery Level 5', 'code' => 'CJ5', 'level' => '5', 'description' => 'Carpentry and Joinery Level 5 course'],
            ['department' => 'Building and Civil', 'name' => 'Plumbing and Water Services Level 5', 'code' => 'PWS5', 'level' => '5', 'description' => 'Plumbing and Water Services Level 5 course'],
            ['department' => 'Building and Civil', 'name' => 'Plumbing and Water Services Level 4', 'code' => 'PWS4', 'level' => '4', 'description' => 'Plumbing and Water Services Level 4 course'],
            ['department' => 'Building and Civil', 'name' => 'Scaffolding Technology Level 6', 'code' => 'ST6', 'level' => '6', 'description' => 'Scaffolding Technology Level 6 course'],
            ['department' => 'Building and Civil', 'name' => 'Scaffolding Technology Level 5', 'code' => 'ST5', 'level' => '5', 'description' => 'Scaffolding Technology Level 5 course'],
            ['department' => 'Building and Civil', 'name' => 'Scaffolding Technology Level 4', 'code' => 'ST4', 'level' => '4', 'description' => 'Scaffolding Technology Level 4 course'],

            // Electrical
            ['department' => 'Electrical', 'name' => 'Electrical Installation Level 6', 'code' => 'EI6', 'level' => '6', 'description' => 'Electrical Installation Level 6 course'],
            ['department' => 'Electrical', 'name' => 'Electrical Installation Level 5', 'code' => 'EI5', 'level' => '5', 'description' => 'Electrical Installation Level 5 course'],
            ['department' => 'Electrical', 'name' => 'Electrical Installation Level 4', 'code' => 'EI4', 'level' => '4', 'description' => 'Electrical Installation Level 4 course'],
            ['department' => 'Electrical', 'name' => 'Electrical Operations Level 5', 'code' => 'EO5', 'level' => '5', 'description' => 'Electrical Operations Level 5 course'],
            ['department' => 'Electrical', 'name' => 'Electronics Engineering Level 6', 'code' => 'EE6', 'level' => '6', 'description' => 'Electronics Engineering Level 6 course'],

            // ICT
            ['department' => 'ICT', 'name' => 'ICT Technician Level 6', 'code' => 'ICTT6', 'level' => '6', 'description' => 'ICT Technician Level 6 course'],
            ['department' => 'ICT', 'name' => 'ICT Technician Level 5', 'code' => 'ICTT5', 'level' => '5', 'description' => 'ICT Technician Level 5 course'],
            ['department' => 'ICT', 'name' => 'ICT Technician Level 4', 'code' => 'ICTT4', 'level' => '4', 'description' => 'ICT Technician Level 4 course'],
            ['department' => 'ICT', 'name' => 'Computer Science Level 6', 'code' => 'CS6', 'level' => '6', 'description' => 'Computer Science Level 6 course'],
            ['department' => 'ICT', 'name' => 'Computer Programming Level 6', 'code' => 'CP6', 'level' => '6', 'description' => 'Computer Programming Level 6 course'],
            ['department' => 'ICT', 'name' => 'Cyber Security Level 6', 'code' => 'CSec6', 'level' => '6', 'description' => 'Cyber Security Level 6 course'],
            ['department' => 'ICT', 'name' => 'Computer Science Level 5', 'code' => 'CS5', 'level' => '5', 'description' => 'Computer Science Level 5 course'],
            ['department' => 'ICT', 'name' => 'Network and System Administration Level 6', 'code' => 'NSA6', 'level' => '6', 'description' => 'Network and System Admin Level 6 course'],
            ['department' => 'ICT', 'name' => 'Cyber Security Level 5', 'code' => 'CSec5', 'level' => '5', 'description' => 'Cyber Security Level 5 course'],
            ['department' => 'ICT', 'name' => 'Office Administration Level 5', 'code' => 'OA5', 'level' => '5', 'description' => 'Office Administration Level 5 course'],

            // Agriculture
            ['department' => 'Agriculture', 'name' => 'Dairy Farm Management Level 6', 'code' => 'DFM6', 'level' => '6', 'description' => 'Dairy Farm Management Level 6 course'],
            ['department' => 'Agriculture', 'name' => 'Dairy Farm Management Level 5', 'code' => 'DFM5', 'level' => '5', 'description' => 'Dairy Farm Management Level 5 course'],
            ['department' => 'Agriculture', 'name' => 'Dairy Farm Management Level 4', 'code' => 'DFM4', 'level' => '4', 'description' => 'Dairy Farm Management Level 4 course'],
            ['department' => 'Agriculture', 'name' => 'Agriculture Extension Level 6', 'code' => 'AE6', 'level' => '6', 'description' => 'Agriculture Extension Level 6 course'],
            ['department' => 'Agriculture', 'name' => 'Agriculture Extension Level 4', 'code' => 'AE4', 'level' => '4', 'description' => 'Agriculture Extension Level 4 course'],
            ['department' => 'Agriculture', 'name' => 'Horticulture Production Level 6', 'code' => 'HP6', 'level' => '6', 'description' => 'Horticulture Production Level 6 course'],
            ['department' => 'Agriculture', 'name' => 'Horticulture Production Level 5', 'code' => 'HP5', 'level' => '5', 'description' => 'Horticulture Production Level 5 course'],
            ['department' => 'Agriculture', 'name' => 'Horticulture Production Level 4', 'code' => 'HP4', 'level' => '4', 'description' => 'Horticulture Production Level 4 course'],

            // Mechanical
            ['department' => 'Mechanical', 'name' => 'Welding (Gas Welding and Gas Tungsten Arc Welding) Level 4', 'code' => 'WGW4', 'level' => '4', 'description' => 'Welding Level 4 course'],
            ['department' => 'Mechanical', 'name' => 'Welding (Gas Welding) Level 3', 'code' => 'WG3', 'level' => '3', 'description' => 'Welding Level 3 course'],
            ['department' => 'Mechanical', 'name' => 'Welding and Fabrication Level 6', 'code' => 'WF6', 'level' => '6', 'description' => 'Welding and Fabrication Level 6 course'],
            ['department' => 'Mechanical', 'name' => 'Welding and Fabrication Level 5', 'code' => 'WF5', 'level' => '5', 'description' => 'Welding and Fabrication Level 5 course'],
            ['department' => 'Mechanical', 'name' => 'Mechanical Engineering (Prod.) Level 6', 'code' => 'ME6', 'level' => '6', 'description' => 'Mechanical Engineering Level 6 course'],
            ['department' => 'Mechanical', 'name' => 'Mechanical Engineering (Prod.) Level 5', 'code' => 'ME5', 'level' => '5', 'description' => 'Mechanical Engineering Level 5 course'],
            ['department' => 'Mechanical', 'name' => 'Mechanical Engineering (Prod.) Level 4', 'code' => 'ME4', 'level' => '4', 'description' => 'Mechanical Engineering Level 4 course'],
        ];

        foreach ($courses as $course) {
            $department = Department::where('name', $course['department'])->first();

            if ($department) {
                Course::create([
                    'name' => $course['name'],
                    'code' => $course['code'],
                    'level' => $course['level'],
                    'description' => $course['description'],
                    'department_id' => $department->id,
                ]);
            }
        }
    }
}
