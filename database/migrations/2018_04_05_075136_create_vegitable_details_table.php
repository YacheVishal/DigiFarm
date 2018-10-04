<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVegitableDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vegitable_details', function (Blueprint $table) {
            $table->increments('id');
                            
            $table->string('vegitable_name');
            $table->string('vegitable_images');
            $table->string('vegitable_review');
            $table->string('vegitable-ratings');
            $table->string('vegitable_price');
            $table->string('vegitable_quantity');
            $table->string('vegitable_quality');

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
        Schema::dropIfExists('vegitable_details');
    }
}
