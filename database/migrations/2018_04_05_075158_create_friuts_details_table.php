<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFriutsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('friuts_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('friuts_name');
            $table->string('friuts_images');
            $table->string('friuts_review');
            $table->string('friuts_ratings');
            $table->string('friuts_price');
            $table->string('friuts_quantity');
            $table->string('friuts_quality');

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
        Schema::dropIfExists('friuts_details');
    }
}
