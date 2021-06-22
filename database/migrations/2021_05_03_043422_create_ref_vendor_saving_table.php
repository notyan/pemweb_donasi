<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefVendorSavingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_vendor_saving', function (Blueprint $table) {
            $table->id();
            //$table->foreignId('id_user')->constrained('users');
            $table->string('nama', 50);
            $table->timestamp('inserted_at');
            $table->string('inserted_by', 50);
            $table->timestamp('edited_at')->default(DB::raw('NULL ON UPDATE CURRENT_TIMESTAMP'))->nullable();;;
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
        Schema::dropIfExists('ref_vendor_saving');
    }
}
