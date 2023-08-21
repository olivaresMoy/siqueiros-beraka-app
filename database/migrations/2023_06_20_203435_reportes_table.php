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
        // Reportes
        Schema::create('reportes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
            ->constrained(table: 'users', indexName: 'reportes_user_id')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->boolean('cumplio_temario');
            $table->boolean('cumplio_tareas');
            $table->boolean('cumplio_conducta');
            $table->boolean('cumplio_higiene');
            $table->boolean('trae_utiles');
            $table->boolean('tiene_apuntes');
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
        //
    }
};
