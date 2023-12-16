<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('about')->insert([
            'title' => 'test',
            'short_title' => 'test',
            'short_description' => 'test',
            'long_description' => 'test',
            'about_image' => 'test',
        ]);
    }
}
