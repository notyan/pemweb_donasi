<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramFunriserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program_funriser', function (Blueprint $table) {
            $table->id('id');   
            $table->foreignId('id_program')->constrained('program');
            $table->foreignId('id_user')->constraint('user');
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
        Schema::dropIfExists('program_funriser');
    }
}
