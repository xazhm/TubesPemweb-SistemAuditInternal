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
        Schema::create('unit_prodi', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('ketua_unit')->nullable();
            $table->string('nip_ketua_unit')->nullable();
            $table->unsignedBigInteger('id_fakultas');
            $table->timestamps();

            $table->foreign('id_fakultas')->references('id')->on('unit_fakultas');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unit_prodi');
    }
};
