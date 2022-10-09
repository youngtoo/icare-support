<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneralStatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('general_statuses')->insert([
            'gs_name' => 'Active',
            'gs_description' => 'This represents an active status.',
        ]);


        DB::table('general_statuses')->insert([
            'gs_name' => 'Disabled',
            'gs_description' => 'This represents an disabled status.',
        ]);

        DB::table('general_statuses')->insert([
            'gs_name' => 'Suspended',
            'gs_description' => 'This represents an suspended status.',
        ]);
    }
}
