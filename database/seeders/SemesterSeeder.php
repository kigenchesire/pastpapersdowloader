<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $semesters = [
            ['id' => 5, 'name' => 'Semester 1.1', 'slug' => 'semester1.1'],
            ['id' => 6, 'name' => 'Semester 1.2', 'slug' => 'semester1.2'],
            ['id' => 7, 'name' => 'Semester 2.1', 'slug' => 'semester2.1'],
            ['id' => 8, 'name' => 'Semester 2.2', 'slug' => 'semester2.2'],
            ['id' => 9, 'name' => 'Semester 3.1', 'slug' => 'semester3.1'],
            ['id' => 10, 'name' => 'Semester 3.2', 'slug' => 'semester3.2'],
            ['id' => 11, 'name' => 'Semester 4.1', 'slug' => 'semester4.1'],
            ['id' => 12, 'name' => 'Semester 4.2', 'slug' => 'semester4.2'],
        ];

        DB::table('semester')->insert($semesters);
    }
}
