<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpicesSeedsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spices_seeds_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('spices_seeds_name');
            $table->string('spices_seeds_images');
            $table->string('spices_seeds_review');
            $table->string('spices_seeds_ratings');
            $table->string('spices_seeds_price');
            $table->string('spices_seeds_quantity');
            $table->string('spices_seeds_quality');
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
        Schema::dropIfExists('spices_seeds_details');
    }
}
