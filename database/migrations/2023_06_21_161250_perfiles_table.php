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
        // Perfiles
        Schema::create('perfiles', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 80);
            $table->string('apaterno', 80);
            $table->string('amaterno', 80);
            $table->string('celular', 10)->nullable;
            $table->string('sexo', 1);

            $table->unsignedBigInteger('user_id')->unique();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
                
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
