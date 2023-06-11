<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('category_id');
            $table->foreignId('subcategory_id');
            $table->string('title');
            $table->string('listing_type');
            $table->string('listing_duration');
            $table->string('price')->nullable();
            $table->string('start_date')->nullable();
            $table->string('start_time')->nullable();
            $table->string('quantity')->nullable();
            $table->string('starting_price')->nullable();
            $table->string('reserve_price')->nullable();
            $table->string('color')->nullable();
            $table->string('doors')->nullable();
            $table->string('body_style')->nullable();
            $table->string('mileage')->nullable();
            $table->string('year')->nullable();
            $table->string('condition')->nullable();
            $table->string('transmission')->nullable();
            $table->string('seller_type')->nullable();
            $table->enum('air_conditioned',['yes','no']);
            $table->enum('registered', ['yes','no']);
            $table->longText('description');
            $table->string('image_1');
            $table->string('image_2')->nullable();
            $table->string('image_3')->nullable();
            $table->string('image_4')->nullable();
            $table->string('image_5')->nullable();
            $table->string('image_6')->nullable();
            $table->string('image_7')->nullable();
            $table->string('image_8')->nullable();
            $table->string('image_9')->nullable();
            $table->string('image_10')->nullable();
            $table->string('city');
            $table->string('suburb');
            $table->string('name');
            $table->longText('shipping');
            $table->longText('payment_method');
            $table->string('category_page_free')->nullable();
            $table->string('category_page_free_days')->nullable();
            $table->string('category_featured_image')->nullable();
            $table->string('category_featured_image_days')->nullable();
            $table->string('home_page_featured')->nullable();
            $table->string('home_page_featured_days')->nullable();
            $table->string('homepage_slider_gallery')->nullable();
            $table->string('homepage_slider_gallery_days')->nullable();
            $table->string('tag_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listings');
    }
};
