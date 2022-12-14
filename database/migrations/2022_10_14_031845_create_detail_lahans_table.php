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
        Schema::create('detail_lahans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->timestamp('tanggal_penanaman')->nullable();
            $table->timestamp('tanggal_panen')->nullable();
            $table->foreignId('lahan_id')->constrained('lahans');
            $table->string('foto_lahan');
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
        Schema::dropIfExists('detail_lahans');
    }
};
