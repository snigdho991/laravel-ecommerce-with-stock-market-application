<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('category_id');
            $table->integer('subcategory_id')->nullable();
            $table->integer('child_subcategory_id')->nullable();
            $table->string('product_name');
            $table->string('product_slug');
            $table->string('product_code');
            $table->string('main_image');
            $table->string('second_image')->nullable();
            $table->string('third_image')->nullable();
            $table->text('description');
            $table->string('colorway')->nullable();
            $table->boolean('home_slider')->default(0);
            /*$table->string('wash_care');
            $table->string('fabric');
            $table->string('pattern');
            $table->string('sleeve');
            $table->string('fit');*/
            $table->string('occasion')->nullable();
            $table->float('product_price');
            $table->float('product_discount')->nullable();
            $table->string('product_weight')->nullable();
            $table->string('product_video')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->tinyInteger('status');

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
        Schema::dropIfExists('products');
    }
}
