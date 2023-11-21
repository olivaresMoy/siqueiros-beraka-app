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
        // Asignaturas
        Schema::create('asignaturas', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('grupo_id');
            $table->foreign('grupo_id')
                ->references('id')
                ->on('grupos');

            $table->unsignedBigInteger('docente_id');
            $table->foreign('docente_id')
                ->references('id')
                ->on('docentes');

            $table->string('name', 100);
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
