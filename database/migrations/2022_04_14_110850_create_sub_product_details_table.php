<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubProductDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_product_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sub_product_list_id');
            $table->string('name')->unique();
            $table->longText('description');
            $table->foreign('sub_product_list_id')->references('id')->on('sub_product_lists');
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
        Schema::dropIfExists('sub_product_details');
    }
}
