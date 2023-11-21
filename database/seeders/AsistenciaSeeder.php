<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Asistencia;

class AsistenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Asistencia
        $asistencia1 = new Asistencia();
        $asistencia1->asignatura_id = '1';
        $asistencia1->user_id = '2';
        $asistencia1->estatus = 'Falta';
        $asistencia1->save();

        $asistencia2 = new Asistencia();
        $asistencia2->asignatura_id = '2';
        $asistencia2->user_id = '2';
        $asistencia2->estatus = 'Asistencia';
        $asistencia2->save();
    }
}
