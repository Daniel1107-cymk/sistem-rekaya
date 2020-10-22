<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('no_induk');
            $table->tinyInteger('sex')->nullable();
            $table->date('dob')->nullable();
            $table->string('dob_place')->nullable();
            $table->string('alamat')->nullable();
            $table->string('wali')->nullable();
            $table->integer('phone')->nullable();
            $table->unsignedBigInteger('sekolah_id')->nullable();
            $table->unsignedBigInteger('paket_id')->nullable();
            $table->timestamps();

            $table->foreign('sekolah_id')->references('id')->on('sekolah');
            $table->foreign('paket_id')->references('id')->on('paket');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
}
