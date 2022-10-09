<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SLASeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('s_l_a_s')->insert([
            'id' => 1,
            'sla_level' => 'Level 1',
            'definition' => 'Critical ',
            'description' => 'Complete service breakdown',
            'response' => 4,
            'resolution' => 0,
            'active' => true,
            'created_at' => now(),
        ]);

        DB::table('s_l_a_s')->insert([
            'id' => 2,
            'sla_level' => 'Level 2',
            'definition' => 'Major',
            'description' => 'Cause servere impact to operations',
            'response' => 8,
            'resolution' => 72,
            'active' => true,
            'created_at' => now(),
        ]);

        DB::table('s_l_a_s')->insert([
            'id' => 3,
            'sla_level' => 'Level 3',
            'definition' => 'Minor',
            'description' => 'No Escalation required.',
            'response' => 12,
            'resolution' => 24,
            'active' => true,
            'created_at' => now(),
        ]);

        DB::table('s_l_a_s')->insert([
            'id' => 4,
            'sla_level' => 'Level 4',
            'definition' => 'Sample SLA',
            'description' => 'Sample SLA',
            'response' => 24,
            'resolution' => 48,
            'active' => false,
            'created_at' => now(),
        ]);
    }
}
