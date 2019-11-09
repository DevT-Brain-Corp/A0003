<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rentals', function (Blueprint $table) {
            $table->bigIncrements('id_rental');
            $table->unsignedBigInteger('building');
            $table->dateTime('day_start');
            $table->dateTime('day_over');
            $table->unsignedBigInteger('loaner');
            $table->timestamps();

            $table->foreign('building')->references('id_building')->on('buildings')->ondelete('restrict');

            $table->foreign('loaner')->references('id_user')->on('users')->ondelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rental');
    }
}
