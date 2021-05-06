<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelurahanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelurahan', function (Blueprint $table) {
            $table->id('id');
            $table->string('nama', 50);
            $table->foreignID('id_kecamatan')->constrained('kecamatan');
            $table->boolean("is_verified");
            $table->timestamps('inserted_at');
            $table->string('inserted_by', 50);
            $table->timestamps('edited_at');
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
        Schema::dropIfExists('kelurahan');
    }
}
