<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('footer')->insert([
            'number' => '1',
            'short_description' => 'test',
            'adress' => 'test',
            'email' => 'test',
            'facebook' => 'test',
            'twitter' => 'test',
            'copyright' => 'test',
        ]);
    }
}
