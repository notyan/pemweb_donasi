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
            $table->foreignId('id_program')->constrained('program');
            $table->unsignedBigInteger('nominal_donasi');
            $table->foreignId('id_rekening')->constrained('rekening');
            $table->string('nama_pengirim', 50);
            $table->string('no_rekening_pengirim')->unique();
            $table->string('nama_atas_nama', 50);
            $table->string('email');
            $table->text('pesan');
            $table->string('status_verifikasi');
            $table->string('status_donasi');
            $table->timestamp('inserted_at');
            $table->string('inserted_by', 50);
            $table->timestamp('edited_at');
            $table->string('edited_by', 50);
            $table->timestamp('verfied_at');
            $table->string('verified_by', 50);
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
