<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id_payment');
            $table->unsignedBigInteger('rental');
            $table->dateTime('day_payment');
            $table->bigInteger('salary');
            $table->string('approvement');
            $table->timestamps();

            $table->foreign('rental')->references('id_rental')->on('rentals')->ondelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
