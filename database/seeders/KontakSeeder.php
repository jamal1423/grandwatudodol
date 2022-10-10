<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KontakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kontak')->insert([
            'alamat' => 'Grand Watudodol Jl. Raya Situbondo, Parasputih, Bangsring, Wongsorejo, Banyuwangi, Jawa Timur',
            'no_wa' => '+6282334867904',
            'email' => 'info@grandwatudodol.com',
            'ig' => 'https://www.instagram.com/grandwatudodol_bwi/',
            'fb' => ''
        ]);
    }
}
