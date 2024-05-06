<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alumno;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Alumnos
        $alumno1 = new Alumno();
        $alumno1->user_id = '4';
        $alumno1->grupo_id = '1';
        $alumno1->tutore_id = '1';
        $alumno1->save();
    }
}
