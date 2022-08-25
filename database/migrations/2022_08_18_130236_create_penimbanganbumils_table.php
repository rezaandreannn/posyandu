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
            $table->string('tinggi_badan')->nullable();
            $table->string('lila')->nullable();
            $table->string('g2')->nullable();
            $table->string('p2')->nullable();
            $table->string('a0')->nullable();
            $table->longText('keterangan')->nullable();
            $table->string('status')->default('antri');
            $table->string('posyandu');
            $table->timestamps();

            $table->foreign('bumil_id')
                ->references('id')
                ->on('bumils')
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
        Schema::dropIfExists('penimbanganbumils');
    }
}
