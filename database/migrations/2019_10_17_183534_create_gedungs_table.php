<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGedungsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gedungs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_owner');
            $table->string('NamaGedung');
            $table->string('AlamatGedung');
            $table->integer('Biaya');
            $table->integer('Kapasitas');
            $table->string('Keterangan');
            $table->string('File');
            $table->string('Kriteria')->default('Sedang');
            $table->boolean('Verifikasi')->default(false);
            $table->timestamps();

            $table->foreign('id_owner')->references('id')->on('users')->ondelete('restrict');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gedungs');
    }
}
