<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\StudentPresence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::factory()
            -> has(StudentPresence::factory() -> count(1))
            -> count(10)
            -> create();
    }
}
