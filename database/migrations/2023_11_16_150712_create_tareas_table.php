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
        Schema::create('tareas', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('asignatura_id')->nullable();
            $table->foreign('asignatura_id')
                ->references('id')
                ->on('asignaturas')
                ->onDelete('set null');

            $table->longText('descripcion');
            $table->boolean('enterado');
            $table->date('entrega');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tareas');
    }
};
