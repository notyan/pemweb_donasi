<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramBeritaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program_berita', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('id_program')->constrained('program');
            $table->string('judul',100);
            $table->string('konten_berita',100);
            $table->boolean('is_active');
            $table->timestamp('inserted_at');
            $table->string('inserted_by',100);
            $table->timestamp('edited_at');
            $table->string('edited_by',100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('program_berita');
    }
}
