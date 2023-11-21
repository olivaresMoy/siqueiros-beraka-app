<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(InstitucioneSeeder::class);
        $this->call(NiveleSeeder::class);
        $this->call(GrupoSeeder::class);
        $this->call(PerfileSeeder::class);
        $this->call(DocenteSeeder::class);
        $this->call(AsignaturaSeeder::class);
        $this->call(AsignaturaGrupoSeeder::class);
        $this->call(TareaSeeder::class);
        $this->call(AsistenciaSeeder::class);
        $this->call(TutoreSeeder::class);
        $this->call(AlumnoSeeder::class);
        $this->call(CalificacioneSeeder::class);
        $this->call(ReporteSeeder::class);
        $this->call(NotificacioneSeeder::class);
    }
}
// INSERT INTO `perfiles` (`id`, `nombre`, `apaterno`, `amaterno`, `celular`, `sexo`, `rol`, `user_id`, `created_at`, `updated_at`) VALUES ('0', 'Moises', 'Olivares', 'Encarnación', '7441042627', 'm', 'Admin', '1', NULL, NULL)