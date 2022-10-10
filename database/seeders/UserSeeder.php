<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin GWD',
            'username' => 'admingwd1',
            'email' => 'admin1@admin.com',
            'password' => bcrypt('Gwd2022!!!')
        ]);
        
        DB::table('users')->insert([
            'name' => 'Admin GWD',
            'username' => 'admingwd2',
            'email' => 'admin2@admin.com',
            'password' => bcrypt('Gwd2022!!!')
        ]);
    }
}
