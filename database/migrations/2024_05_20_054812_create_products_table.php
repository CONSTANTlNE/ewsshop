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
            $table->id();
            $table->string('name');
            $table->string('slug')->index();
            $table->text('description');
            $table->float('price');
            $table->string('SKU')->index()->nullable();
            $table->boolean('main_page')->default(1)->index();
            $table->boolean('category_gallery')->default(1)->index();
            $table->foreignId('category_id')->references('id')->on('categories')->onDelete('cascade')->nullable();
            $table->foreignId('shop_id')->constrained('shops');
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
