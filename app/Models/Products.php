<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'product_name_ind',
        'product_slug_ind',
        'product_code',
        'product_qty',
        'product_tags_ind',
        'product_size_ind',
        'product_color_en',
        'product_color_ind',
        'selling_price',
        'discount_price',
        'short_descp_ind',
        'long_descp_ind',
        'product_thumbnail',
        'hot_deals',
        'featured',
        'special_offer',
        'special_deals',
        'status',
    ];
}
