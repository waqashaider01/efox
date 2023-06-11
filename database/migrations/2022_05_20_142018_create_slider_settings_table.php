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
        Schema::create('slider_settings', function (Blueprint $table) {
            $table->id();
            $table->string('slider_speed')->nullable();
            $table->string('slider_pause')->nullable();
            $table->enum('visible_status', ['on','off'])->nullable();
            $table->enum('autoplay_status', ['on','off'])->nullable();
            $table->enum('mousehover_status', ['on','off'])->nullable();
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
        Schema::dropIfExists('slider_settings');
    }
};
