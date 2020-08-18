<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('my_account');
            $table->string('wishlist');
            $table->string('home');
            $table->string('shop_all');
            $table->string('browse');
            $table->string('portfolio');
            $table->string('help');
            $table->string('login');
            $table->string('registration');
            $table->string('sell');
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
        Schema::dropIfExists('menu_settings');
    }
}
