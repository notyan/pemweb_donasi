<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramDonaturTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program_donatur', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('id_program')->constrained('program');
            $table->unsignedInteger('nominal_donasi');                   //APABILA DOLLAR PAKAI DOUBLE
            $table->string('id_rekening',50);
            $table->strubg('nama_pengirim',50);
            $table->string('no_rekening_pengirim',50);
            $table->strimg('nama_atas_nama',50);
            $table->string('email');
            $table->text('pesan');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('program_donatur');
    }
}
