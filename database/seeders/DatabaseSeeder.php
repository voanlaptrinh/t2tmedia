<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Landingpages;
use App\Models\Languages;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        //chạy lại dữ liệu mẫu trước khi chạy sẽ drop tất cả dữu liệu ở bảng cũ

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
       
      
        DB::table('landingpages')->insert(
            [
                'title' => 'block01',
                'order' => 1,
                'status' => 1

            ],

        );
        DB::table('landingpages')->insert(
            [
                'title' => 'block02',
                'order' => 2,
                'status' => 1
            ],
        );
        DB::table('landingpages')->insert(
            [
                'title' => 'block03',
                'order' => 3,
                'status' => 1
            ],
        );
        DB::table('landingpages')->insert(
            [
                'title' => 'block04',
                'order' => 4,
                'status' => 1
            ],
        );
        DB::table('landingpages')->insert(
            [
                'title' => 'block05',
                'order' => 5,
                'status' => 1
            ],
        );
        DB::table('landingpages')->insert(
            [
                'title' => 'block06',
                'order' => 6,
                'status' => 1
            ],
        );
        DB::table('landingpages')->insert(
            [
                'title' => 'block07',
                'order' => 7,
                'status' => 1
            ],
        );
        DB::table('landingpages')->insert(
            [
                'title' => 'block08',
                'order' => 8,
                'status' => 1
            ],
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
