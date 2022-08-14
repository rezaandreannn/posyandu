<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVitaminbalitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vitaminbalitas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('balita_id');
            $table->string('jenis')->nullable();
            $table->string('status')->default('antri');
            $table->string('posyandu')->nullable();
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
        Schema::dropIfExists('vitaminbalitas');
    }
}
