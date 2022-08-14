<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImunisasibalitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imunisasibalitas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('balita_id');
            $table->enum('jenis_imunisasi', ['Hepatitis B', 'BCG', 'Polio', 'DPT', 'Campak'])->nullable();
            $table->string('status')->default('antri');
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
        Schema::dropIfExists('imunisasibalitas');
    }
}
