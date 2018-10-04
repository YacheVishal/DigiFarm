<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNurseryDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nursery_details', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nursery_name');
            $table->string('nursery_images');
            $table->string('nursery_review');
            $table->string('nursery_ratings');
            $table->string('nursery_price');
            $table->string('nursery_quantity');
            $table->string('nursery_quality');

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
        Schema::dropIfExists('nursery_details');
    }
}
