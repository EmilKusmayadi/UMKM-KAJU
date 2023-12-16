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
        Schema::create('admins', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->string('products');
            $table->string('banner');
            $table->string('phone');
            $table->string('stock');
            $table->string('order');
            $table->string('setting');
            $table->string('alluser');
            $table->string('adminuserrole');
            $table->integer('type');
            $table->string('remember_token');
            $table->string('current_team_id');
            $table->text('profile_photo_path');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
