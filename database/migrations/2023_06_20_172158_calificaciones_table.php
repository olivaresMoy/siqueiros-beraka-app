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
        // Calificaciones
        Schema::create('calificaciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('asignatura_id')
            ->constrained(table: 'asignaturas', indexName: 'calificaciones_grupo_id')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('id_alumno', 20);
            $table->string('id_asignatura', 20);
            $table->string('id_docente', 20);
            $table->float('calificacion', 10, 2);
            $table->tinyInteger('bloque');
            $table->string('observaciones', 255);
            $table->string('enterado', 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
