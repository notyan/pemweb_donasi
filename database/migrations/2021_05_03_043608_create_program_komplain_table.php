<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramKomplainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program_komplain', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('id_program')->constrained('program');
            $table->text('complain');
            $table->text('response');
            $table->timestamp('inserted_at')->useCurrent();
            $table->string('inserted_by',100);
            $table->timestamp('edited_at')->default(DB::raw('NULL ON UPDATE CURRENT_TIMESTAMP'))->nullable();;
            $table->string('edited_by',100);
            $table->string('verified_by',100);
            $table->timestamp('verified_at')->default(DB::raw('NULL ON UPDATE CURRENT_TIMESTAMP'))->nullable();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('program_komplain');
    }
}
