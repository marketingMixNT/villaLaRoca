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
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->json('meta_title');
            $table->json('meta_desc');
            $table->json('title');
            $table->text('logo');
            $table->text('phone');
            $table->text('phone_second')->nullable();
            $table->text('mail');
            $table->text('mail_second')->nullable();
            $table->text('city');
            $table->text('address');
            $table->json('booking_link');
            $table->text('booking_script');
            $table->text('map')->nullable();
            $table->text('map_link')->nullable();
            $table->json('slider_title');
            $table->json('slider_subtitle');
            $table->text('slider_images')->nullable();
            $table->text('slider_movie')->nullable();
            $table->json('rooms_heading');
            $table->json('rooms_text');
            $table->json('testimonials_heading');
            $table->json('testimonials_text');
            $table->text('google_reviews')->nullable();
            $table->text('google_reviews_average')->nullable();
            $table->text('google_reviews_link')->nullable();
            $table->text('tripadvisor_reviews')->nullable();
            $table->text('tripadvisor_reviews_average')->nullable();
            $table->text('tripadvisor_reviews_link')->nullable();
            $table->json('neighborhood_heading');
            $table->json('neighborhood_text');
            $table->text('neighborhood_images');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homes');
    }
};
