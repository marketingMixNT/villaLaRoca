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
        Schema::create('neighborhood_page_blocks', function (Blueprint $table) {
            $table->id();
            $table->text('image');
            $table->json('text');
            $table->integer('sort')->nullable();
            $table->foreignId('neighborhood_page_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('neighborhood_page_blocks');
    }
};