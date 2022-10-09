<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('departments')->insert([
            'id' => 1,
            'department' => 'Marketing and Communication',
            'description' => 'A deparment',
            'active' => true,
            'created_at' => now(),
        ]);

        DB::table('departments')->insert([
            'id' => 2,
            'department' => 'Vendor/Consultant',
            'description' => 'The vendor',
            'active' => true,
            'created_at' => now(),
        ]);

        DB::table('departments')->insert([
            'id' => 3,
            'department' => 'ICT Department',
            'description' => 'It is ICT',
            'active' => true,
            'created_at' => now(),
        ]);

        DB::table('departments')->insert([
            'id' => 4,
            'department' => 'Other',
            'description' => 'Other',
            'active' => false,
            'created_at' => now(),
        ]);
    }
}
