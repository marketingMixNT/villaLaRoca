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
        Schema::table('regulations', function (Blueprint $table) {
            $table->json('meta_title')->nullable();
            $table->json('meta_desc')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('regulations', function (Blueprint $table) {
            $table->json('meta_titile');
            $table->json('meta_desc');
        });
    }
};
