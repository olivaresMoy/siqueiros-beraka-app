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

            $table->unsignedBigInteger('nivele_id');
            $table->foreign('nivele_id')
                ->references('id')
                ->on('niveles');

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
