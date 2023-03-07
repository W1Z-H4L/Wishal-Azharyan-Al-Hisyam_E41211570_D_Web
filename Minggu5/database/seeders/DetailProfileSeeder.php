<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * 
     */
    public function run()
    {
        DB::table('detail_profile')->insert([
            'addres' => 'Jember',
            'nomor_tlp' => '08xxxxxx',
            'ttl' => '2000-11-26',
            'foto' => 'picture.png'
        ]);
    }
}
