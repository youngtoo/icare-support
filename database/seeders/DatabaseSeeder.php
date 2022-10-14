<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('users')->insert([
            'name' => 'Ian Too',
            'email' => 'ianktoo@gmail.com',
            'password' => Hash::make('P@ssw0rd5'),
            'created_at' => now(),

        ]);


        DB::table('users')->insert([
            'name' => 'Administrator',
            'email' => 'info@iantoo.co.ke',
            'password' => Hash::make('P@ssw0rd5'),
            'created_at' => now(),
        ]);


        $this->call([
            GeneralStatusesSeeder::class,
            StaffSeeder::class,
            SLASeeder::class,
            DepartmentSeeder::class,
            PermissionsTableSeeder::class,
            RolesTableSeeder::class,
            ConnectRelationshipsSeeder::class,
        ]);
    }
}
