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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title',255)->unique();
            $table->string('slug',255)->unique();
            $table->text('content')->nullable();
            $table->unsignedBigInteger('author_id');
            $table->foreign('author_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
            $table->date('date')->nullable();
            $table->string('image',255)->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')
                    ->references('id')
                    ->on('categories')
                    ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
