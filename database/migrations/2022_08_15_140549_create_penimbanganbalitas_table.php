<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenimbanganbalitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penimbanganbalitas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('balita_id');
            $table->string('berat_badan')->nullable();
            $table->string('tinggi_badan')->nullable();
            $table->string('status')->default('antri');
            $table->longText('keterangan')->nullable();
            $table->string('posyandu');
            $table->timestamps();

            $table->foreign('balita_id')
                ->references('id')
                ->on('balitas')
                ->onUpdate('restrict')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penimbanganbalitas');
    }
}
