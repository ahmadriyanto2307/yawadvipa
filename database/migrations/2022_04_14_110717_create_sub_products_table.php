<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('sub_product_category_id');
            $table->string('name')->unique();
            $table->longText('description');
            $table->text('address');
            $table->string('link');
            $table->string('thumbnail');
            $table->foreign('product_id')->references('id')->on('products');
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
        Schema::dropIfExists('sub_products');
    }
}
