<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Mahasiswaregister extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa_registers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('npm');
            $table->string('nama');    
            $table->string('alamat');
            // $table->date('tgl_lahir');
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamp('konfirm_pass');
            // $table->unsignedInteger('id_dosen');
            // $table->foreign('id_dosen')->references('id')->on('dosens')->onDelete('cascade');
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
        //
    }
}
