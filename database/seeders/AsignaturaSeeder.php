<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Asignatura;

class AsignaturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Asignatura
        $asignatura1 = new Asignatura();
        $asignatura1->grupo_id = '1';
        $asignatura1->docente_id = '1';
        $asignatura1->name = 'Español';
        $asignatura1->save();

        // Asignatura
        $asignatura2 = new Asignatura();
        $asignatura2->grupo_id = '1';
        $asignatura2->docente_id = '1';
        $asignatura2->name = 'Matemáticas';
        $asignatura2->save();
    }
}
