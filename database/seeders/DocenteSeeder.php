<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Docente;

class DocenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Docente
        $docente = new Docente();
        $docente->user_id = '5';
        $docente->grupo_id = '1';
        $docente->save();
    }
}
