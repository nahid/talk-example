<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('users')->truncate();
        $users = [
            [
                "name"          => "Nahid Bin Azhar",
                "email"         => "talk@example.com",
                "password"      => bcrypt('123456'),
                "created_at"    => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "name"          => "Robert Carlos",
                "email"         => "carlos@example.com",
                "password"      => bcrypt('123456'),
                "created_at"    => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "name"          => "Firoz Serniabat",
                "email"         => "firoz@example.com",
                "password"      => bcrypt('123456'),
                "created_at"    => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "name"          => "Rony Al Manum",
                "email"         => "rony@example.com",
                "password"      => bcrypt('123456'),
                "created_at"    => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "name"          => "Suman Sutradhar",
                "email"         => "suman@example.com",
                "password"      => bcrypt('123456'),
                "created_at"    => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "name"          => "Arifur Rahman",
                "email"         => "arif@example.com",
                "password"      => bcrypt('123456'),
                "created_at"    => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "name"          => "Obi Plabon",
                "email"         => "obi@example.com",
                "password"      => bcrypt('123456'),
                "created_at"    => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ];

        DB::table('users')->insert($users);
    }
}
