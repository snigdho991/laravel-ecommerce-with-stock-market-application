<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBodySettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('body_settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            // INDEX PAGE
            $table->string('recenty_view_items');
            $table->string('popular_products');
            $table->string('new_lowest_asks');
            $table->string('new_highest_bids');
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
        Schema::dropIfExists('body_settings');
    }
}
