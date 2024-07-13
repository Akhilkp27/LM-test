<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('departments')->insert([
            ['Name' => 'Sales and Marketing'],
            ['Name' => 'Application Development'],
            ['Name' => 'Human Resources'],
            ['Name' => 'Finance'],
            ['Name' => 'Operations'],
            
        ]);
    }
}
