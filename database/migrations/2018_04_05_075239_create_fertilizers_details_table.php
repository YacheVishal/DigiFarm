<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFertilizersDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fertilizers_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fertilizers_name');
            $table->string('fertilizers_images');
            $table->string('fertilizers_review');
            $table->string('fertilizers_ratings');
            $table->string('fertilizers_price');
            $table->string('fertilizers_quantity');
            $table->string('fertilizers_quality');


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
        Schema::dropIfExists('fertilizers_details');
    }
}
