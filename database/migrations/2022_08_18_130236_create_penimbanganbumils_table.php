<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenimbanganbumilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penimbanganbumils', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bumil_id');
            $table->string('berat_badan')->nullable();
            $table->string('status')->default('antri');
            $table->longText('keterangan')->nullable();
            $table->string('posyandu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penimbanganbumils');
    }
}
