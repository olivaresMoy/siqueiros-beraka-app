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
        // Instituciones
        Schema::create('instituciones', function (Blueprint $table) {
            $table->id();
            $table->string('logotipo', 25);
            $table->string('nombre', 100);
            $table->string('cct', 20);
            $table->string('zona', 5);
            $table->string('nivel', 20);
            $table->string('turno', 20);
            $table->string('telefono', 15);
            $table->string('direccion', 200);
            $table->string('director', 100);
            $table->string('supervisor', 100);
            $table->string('jefe_planeacion', 100);
            $table->string('ciclo_escolar', 10);
            $table->float('colegiatura', 10, 2);
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // eliminar
        Schema::drop('instituciones');
    }
};
