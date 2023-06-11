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
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('city_id');
            $table->string('price');
            $table->string('slider_image');
            $table->string('slider_speed');
            $table->string('slider_pause');
            $table->enum('visible_status', ['on','off']);
            $table->enum('autoplay_status', ['on','off']);
            $table->enum('mousehover_status', ['on','off']);
            $table->string('start_from');
            $table->string('valid_until');
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
        Schema::dropIfExists('sliders');
    }
};
