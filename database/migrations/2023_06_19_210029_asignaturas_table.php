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

            $table->unsignedBigInteger('docente_id')->nullable();
            $table->foreign('docente_id')
                ->references('id')
                ->on('docentes')
                ->onDelete('set null');

            $table->string('nombre', 100);
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
