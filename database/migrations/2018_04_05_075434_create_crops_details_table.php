<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCropsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crops_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('crops_name');
            $table->string('crops_images');
            $table->string('crops_review');
            $table->string('crops_ratings');
            $table->string('crops_price');
            $table->string('crops_quantity');
            $table->string('crops_quality');

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
        Schema::dropIfExists('crops_details');
    }
}
