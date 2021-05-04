<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelawanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relawan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user');
            $table->string('nama_depan');
            $table->string('nama_belakang');
            $table->string('alamat_ktp');
            $table->string('no_wa');
            $table->foreignId('id_provinsi');
            $table->foreignId('id_kab');
            $table->foreignId('id_kec');
            $table->foreignId('id_kelurahan');
            $table->foreignId('id_profesi');
            $table->foreignId('id_jk');
            $table->foreignId('id_agama');
            $table->string('token');
            $table->string('email')->unique();
            $table->boolean('is_verified');
            $table->timestamp('inserted_at');
            $table->string('inserted_by');
            $table->timestamp('edited_at');
            $table->string('edited_by');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relawan');
    }
}
