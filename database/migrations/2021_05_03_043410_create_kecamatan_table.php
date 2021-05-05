<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKecamatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kecamatan', function (Blueprint $table) {
            $table->id('id');
            $table->string('nama', 50);
            $table->foreignId('id_kabupaten')->constrained('kabupaten');
            $table->boolean('is_verified');
            $table->timestamp('inserted_at');
            $table->string('inserted_by', 50);
            $table->timestamp('edited_at');
            $table->string('edited_by', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kecamatan');
    }
}
