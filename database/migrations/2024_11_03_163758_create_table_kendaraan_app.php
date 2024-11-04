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
        Schema::create('table_kendaraan_app', function (Blueprint $table) {
            $table->id();
            $table->integer('no_urut');
            $table->string('bagian');
            $table->string('nama_peminta');
            $table->enum('nama_pengikut_pimpinan',['nama1','nama2','nama3','nama4','nama5','nama6','nama7','nama8','nama9','nama10']);
            $table->enum('nama_pengikut_pelaksana',['nama1','nama2','nama3','nama4','nama5','nama6','nama7','nama8','nama9','nama10']);
            $table->string('tujuan');
            $table->string('keperluan');
            $table->date('tanggal');
            $table->time('jam_berangkat');
            $table->time('jam_kembali');
            $table->boolean('peminta');
            $table->boolean('disetujui');
            $table->timestamps();
        });
    }
};

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_kendaraan_app');
    }
