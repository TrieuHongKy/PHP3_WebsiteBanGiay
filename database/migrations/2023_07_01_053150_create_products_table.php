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
            $table->string('name',255)->unique();
            $table->string('slug',255);
            $table->double('price');
            $table->integer('quantity')->min(1)->max(100)->default(1);
            $table->string('image',255);
            $table->longtext('description')->limit(100)->nullable();
            $table->integer('view');
            $table->unsignedBigInteger('category_id');
            $table->timestamps();
            $table->foreign('category_id')
                  ->references('id')
                  ->on('product_categories')
                  ->onDelete('cascade');
            
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
