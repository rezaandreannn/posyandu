<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBumilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bumils', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('nama_ibu');
            $table->string('nama_suami');
            $table->date('tgl_lahir');
            $table->date('tgl_kehamilan');
            $table->string('alamat');
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
        Schema::dropIfExists('bumils');
    }
}
