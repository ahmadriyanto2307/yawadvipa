<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubProductListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_product_lists', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sub_product_id');
            $table->unsignedBigInteger('sub_product_category_id');
            $table->string('name')->unique();
            $table->string('slug');
            $table->string('url');
            $table->string('thumbnail');
            $table->string('description');
            $table->foreign('sub_product_id')->references('id')->on('sub_products');
            $table->foreign('sub_product_category_id')->references('id')->on('sub_product_categories');
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
        Schema::dropIfExists('sub_product_lists');
    }
}
