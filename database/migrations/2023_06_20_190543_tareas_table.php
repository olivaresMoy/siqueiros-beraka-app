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
        // Tareas
        Schema::create('tareas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
            ->constrained(table: 'users', indexName: 'tareas_user_id')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('tarea', 20);
            $table->mediumText('indicaciones');
            $table->date('fecha_entrega');
            $table->boolean('enterado');
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
