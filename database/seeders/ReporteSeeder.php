<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Reporte;

class ReporteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reportes
        $reporte1 = new Reporte();
        $reporte1->user_id = '2';
        $reporte1->asignatura_id = '1';
        $reporte1->cumplio_temario = '1';
        $reporte1->cumplio_tareas = '1';
        $reporte1->cumplio_conducta = '1';
        $reporte1->cumplio_higiene = '1';
        $reporte1->cumplio_utiles = '1';
        $reporte1->cumplio_apuntes = '1';
        $reporte1->observaciones = 'Lorem ipsus Lorem ipsus Lorem ipsus Lorem ipsus Lorem ipsus Lorem ipsus Lorem ipsus Lorem ipsus Lorem ipsus Lorem ipsus Lorem ipsus Lorem ipsus.';
        $reporte1->enterado = '1';
        $reporte1->save();

        $reporte2 = new Reporte();
        $reporte2->user_id = '2';
        $reporte2->asignatura_id = '2';
        $reporte2->cumplio_temario = '1';
        $reporte2->cumplio_tareas = '1';
        $reporte2->cumplio_conducta = '1';
        $reporte2->cumplio_higiene = '1';
        $reporte2->cumplio_utiles = '1';
        $reporte2->cumplio_apuntes = '1';
        $reporte2->observaciones = 'Lorem ipsus Lorem ipsus Lorem ipsus Lorem ipsus Lorem ipsus Lorem ipsus Lorem ipsus Lorem ipsus Lorem ipsus Lorem ipsus Lorem ipsus Lorem ipsus.';
        $reporte2->enterado = '0';
        $reporte2->save();
    }
}
