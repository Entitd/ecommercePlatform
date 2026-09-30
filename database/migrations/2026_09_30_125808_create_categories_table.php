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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parent_category_id')->nullable();
            $table->string('slug')->unique();

            // Мультиязычные поля (тип JSON)
            $table->json('name');
            $table->json('description')->nullable();
            $table->json('meta_description')->nullable();
            $table->json('status');
            $table->json('seo_title')->nullable();
            $table->json('seo_description')->nullable();

            $table->string('image_path_icon')->nullable();
            $table->integer('sorting_order')->default(0);
            $table->boolean('show_on_main')->default(true);
            $table->boolean('show_on_menu')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
