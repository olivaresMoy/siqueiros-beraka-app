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
        Schema::create('reportes', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->unsignedBigInteger('asignatura_id');
            $table->foreign('asignatura_id')
                ->references('id')
                ->on('asignaturas');
            
            $table->boolean('cumplio_temario');
            $table->boolean('cumplio_tareas');
            $table->boolean('cumplio_conducta');
            $table->boolean('cumplio_higiene');
            $table->boolean('cumplio_utiles');
            $table->boolean('cumplio_apuntes');
            $table->mediumText('observaciones');
            $table->boolean('enterado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reportes');
    }
};
