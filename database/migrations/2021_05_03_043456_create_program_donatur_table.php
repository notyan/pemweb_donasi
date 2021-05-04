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
            $table->id();
            $table->foreignId('id_program');
            $table->unsignedBigInteger('nominal_donasi');
            $table->foreignId('id_rekening');
            $table->string('nama_pengirim');
            $table->string('no_rekening_pengirim')->unique();
            $table->string('nama_atas_nama');
            $table->string('email');
            $table->string('pesan');
            $table->string('status_verifikasi');
            $table->string('status_donasi');
            $table->timestamp('inserted_at');
            $table->string('inserted_by');
            $table->timestamp('edited_at');
            $table->string('edited_by');
            $table->timestamp('verfied_at');
            $table->string('verified_by');
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
