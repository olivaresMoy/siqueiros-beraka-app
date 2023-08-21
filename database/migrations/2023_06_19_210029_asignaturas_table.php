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
            $table->foreignId('user_id')
            ->constrained(table: 'users', indexName: 'asignaturas_user_id')
            ->onUpdate('cascade')// or set null
            ->onDelete('cascade');
            $table->string('asignatura', 100);
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
