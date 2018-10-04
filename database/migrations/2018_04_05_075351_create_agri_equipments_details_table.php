<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgriEquipmentsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agri_equipments_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('agri_equipments_name');
            $table->string('agri_equipments_images');
            $table->string('agri_equipments_review');
            $table->string('agri_equipments_ratings');
            $table->string('agri_equipments_price');
            $table->string('agri_equipments_quantity');
            $table->string('agri_equipments_quality');

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
        Schema::dropIfExists('agri_equipments_details');
    }
}
