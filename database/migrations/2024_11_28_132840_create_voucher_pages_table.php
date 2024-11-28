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
        Schema::create('voucher_pages', function (Blueprint $table) {
            $table->id();
            $table->json('meta_title');
            $table->json('meta_desc');
            $table->json('header_heading');
            $table->text('banner');
            $table->json('heading')->nullable();
            $table->json('text')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voucher_pages');
    }
};
