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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->boolean('use_main_gallery')->default(1);
            $table->boolean('use_main_banner')->default(1);
            $table->boolean('use_category')->default(1);
            $table->boolean('use_second_banner')->default(1);
            $table->boolean('use_third_banner')->default(1);
            $table->boolean('use_faq')->default(1);
            $table->boolean('use_service')->default(1);
            $table->boolean('use_slider')->default(1);
            $table->boolean('use_socials')->default(1);
            $table->boolean('use_spec')->default(1);
            $table->boolean('use_messenger')->default(1);
            $table->foreignId('shop_id')->references('id')->on('shops')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
