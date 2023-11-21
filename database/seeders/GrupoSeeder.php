<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Grupo;

class GrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Grupo
        $grupo = new Grupo();
        $grupo->nivele_id = '1';
        $grupo->grado = '1o';
        $grupo->grupo = 'A';
        $grupo->save();
    }
}
