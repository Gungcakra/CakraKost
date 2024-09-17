<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kamar_isis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idKamar');
            $table->unsignedBigInteger('idPenghuni');
            $table->foreign('idKamar')->references('id')->on('kamars');
            $table->foreign('idPenghuni')->references('id')->on('penghunis');
            $table->integer('harga');
            $table->string('status');
            $table->integer('kwhAwal');
            $table->integer('kwhAkhir')->nullable();
            $table->dateTime('waktuMasuk');
            $table->dateTime('jatuhTempo');
            $table->dateTime('waktuKeluar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kamar_isis');
    }
};
