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
        Schema::create('notas', function (Blueprint $table) {
            $table->id();
            $table->integer('kodeNota');
            $table->unsignedBigInteger('idPembayaran');
            $table->unsignedBigInteger('idKamar');
            $table->unsignedBigInteger('idPenghuni');
            $table->foreign('idPembayaran')->references('id')->on('pembayarans')->onDelete('cascade');
            $table->foreign('idKamar')->references('id')->on('kamars');
            $table->foreign('idPenghuni')->references('id')->on('penghunis');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notas');
    }
};
