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
        Schema::create('auction_settings', function (Blueprint $table) {
            $table->id();
            $table->enum('enable_status', ['on','off']);
            $table->string('duration_options')->nullable();
            $table->string('duration_days');
            $table->enum('change_duration_status', ['on','off']);
            $table->enum('edit_schedule_status', ['on','off']);
            $table->string('max_auto_relists');
            $table->string('snper_protection_seconds');
            $table->enum('reserve_status', ['on','off']);
            $table->enum('quick_bid_status', ['on','off']);
            $table->enum('auto_bid_status', ['on','off']);
            $table->enum('bid_confirm_status', ['on','off']);
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
        Schema::dropIfExists('auction_settings');
    }
};
