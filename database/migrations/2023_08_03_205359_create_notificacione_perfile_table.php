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
        Schema::create('notificacione_perfile', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('notificacione_id');
            $table->unsignedBigInteger('perfile_id');
            
            $table->foreign('notificacione_id')
            ->references('id')->on('notificaciones')
            ->onDelete('cascade');

            $table->foreign('perfile_id')
            ->references('id')->on('perfiles')
            ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notificacione_perfile');
    }
};
