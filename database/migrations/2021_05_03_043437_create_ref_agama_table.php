<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefAgamaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_agama', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->constrained('user');
            $table->string('nama', 50);
            $table->boolean('is_active');
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
        Schema::dropIfExists('ref_agama');
    }
}
