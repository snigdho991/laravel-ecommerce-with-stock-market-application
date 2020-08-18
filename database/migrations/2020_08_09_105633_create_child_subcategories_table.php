<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildSubcategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('child_subcategories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('category_slug');
            $table->string('subcategory_slug');
            $table->string('childsubcategory_name');
            $table->string('childsubcategory_slug');
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
        Schema::dropIfExists('child_subcategories');
    }
}
