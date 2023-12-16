<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('id');
            $table->string('product_name_ind');
            $table->string('product_slug_ind');
            $table->string('product_code');
            $table->string('product_qty');
            $table->string('product_tags_ind');
            $table->string('product_size_ind');
            $table->string('product_color_ind');
            $table->string('selling_price');
            $table->string('discount_price');
            $table->string('short_descp_ind');
            $table->string('long_descp_ind');
            $table->string('product_thumbnail');
            $table->integer('hot_deals');
            $table->integer('featured');
            $table->integer('special_offer');
            $table->integer('special_deals');
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');

    }
};
