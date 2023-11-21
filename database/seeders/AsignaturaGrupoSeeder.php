<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AsignaturaGrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // AsignaturaGrupo
        DB::table('asignatura_grupo')->insert([
            'asignatura_id' => '1',
            'grupo_id' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('asignatura_grupo')->insert([
            'asignatura_id' => '2',
            'grupo_id' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}