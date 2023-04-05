<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posyandus', function (Blueprint $table) {
            $table->integer('No_Urut')->primary();
            $table->string('Nama', 50)->nullable();
            $table->string('Alamat', 30)->nullable();
            $table->string('Tanggal_lahir', 50)->nullable();
            $table->string('Bb_lahir', 20)->nullable();
            $table->string('Tb_lahir', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posyandus');
    }
};
