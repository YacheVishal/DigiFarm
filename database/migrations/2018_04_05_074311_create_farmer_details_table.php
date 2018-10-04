<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFarmerDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmer_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('farmer_name');
            $table->string('mobile_no');
            $table->string('email');
            $table->string('gender');
            $table->string('dob');
            $table->string('location');
            $table->string('city');
            
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
        Schema::dropIfExists('farmer_details');
    }
}
