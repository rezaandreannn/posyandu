<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImunisasibumilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imunisasibumils', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bumil_id');
            $table->string('nama')->nullable();
            $table->string('status')->default('antri');
            $table->string('keterangan')->nullable();
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
        Schema::dropIfExists('imunisasibumils');
    }
}
