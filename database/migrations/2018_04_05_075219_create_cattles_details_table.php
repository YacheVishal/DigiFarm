<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCattlesDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cattles_details', function (Blueprint $table) {
            $table->increments('id');

            $table->string('cattles_name');
            $table->string('cattles_images');
            $table->string('cattles_review');
            $table->string('cattles_ratings');
            $table->string('cattles_price');
            $table->string('cattles_quantity');
            $table->string('cattles_quality');

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
        Schema::dropIfExists('cattles_details');
    }
}
