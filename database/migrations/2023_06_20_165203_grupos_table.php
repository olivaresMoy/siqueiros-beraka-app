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
        // Grupos
        Schema::create('grupos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
            ->constrained(table: 'users', indexName: 'grupos_user_id')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('institucion_id')
            ->constrained(table: 'instituciones', indexName: 'grupos_institucion_id')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('grado', 2);
            $table->string('grupo', 1);
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
