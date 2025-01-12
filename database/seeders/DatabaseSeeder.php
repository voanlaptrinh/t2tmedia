<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('landingpages')->insert(
            [
                'title' => 'block02',
                'order' => 1,
                'status' => 1
    
            ],
            [
                'title' => 'block02',
                'order' => 2,
                'status' => 1
            ],
            [
                'title' => 'block03',
                'order' => 3,
                'status' => 1
            ]
           
        );
        // DB::table('landingpages')->insert(
        //     [
        //         'title' => 'block02',
        //         'order' => 2,
        //         'status' => 1
        //     ],
        // );
    }
}
