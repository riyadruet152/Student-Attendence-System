<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    public function run()
    {
        Student::insert([
            ['name' => 'John Doe', 'roll_number' => '101', 'class' => '10', 'section' => 'A'],
            ['name' => 'Jane Smith', 'roll_number' => '102', 'class' => '10', 'section' => 'A'],
        ]);
    }
}
