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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idKamar');
            $table->unsignedBigInteger('idPenghuni');
            // $table->unsignedBigInteger('idKamarIsi');
            $table->foreign('idKamar')->references('id')->on('kamars');
            $table->foreign('idPenghuni')->references('id')->on('penghunis');
            // $table->foreign('idPenghuni')->references('id')->on('kamarisis')->onDelete('cascade');
            $table->integer('harga');
            $table->integer('kwhAwal');
            $table->integer('kwhAkhir')->nullable();
            $table->float('listrik');
            $table->integer('sampah');
            $table->integer('lain')->nullable();
            $table->string('ketLain')->nullable();
            $table->float('total');
            $table->dateTime('waktuMasuk');
            $table->dateTime('jatuhTempo');
            $table->string('status');
            $table->dateTime('tanggalBayar'); 
            $table->timestamps();  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};
