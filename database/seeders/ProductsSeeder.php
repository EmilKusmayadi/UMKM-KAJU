<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'product_name_ind' => 'nabati',
            'product_slug_ind' => 'teh',
            'product_code' => '0001',
            'product_qty' => '0001',
            'product_tags_ind' => '0001',
            'product_size_ind' => '01',
            'product_color_ind' => 'red',
            'selling_price' => 'test',
            'discount_price' => '20%',
            'short_descp_ind' => 'test',
            'long_descp_ind' => 'test',
            'product_thumbnail' => 'nabati',
            'hot_deals' => 01,
            'featured' => 01,
            'special_offer' => 01,
            'special_deals' => 01,
            'status' => 1
        ]);
    }
}
