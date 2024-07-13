<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesignationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('designations')->insert([
            ['Name' => 'Marketing Manager'],
            ['Name' => 'Mobile Application Dev'],
            ['Name' => 'Sales Representative'],
            ['Name' => 'HR Specialist'],
            ['Name' => 'Project Manager'],
            
        ]);
    }
}
