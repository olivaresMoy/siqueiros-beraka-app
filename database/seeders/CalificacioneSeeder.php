<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Calificacione;

class CalificacioneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Calificaciones
        $calif1 = new Calificacione();
        $calif1->user_id = '2';
        $calif1->asignatura_id = '1';
        $calif1->calificacion = '90.65';
        $calif1->bloque = '1';
        $calif1->observaciones = 'Lorem ipsus Lorem ipsus Lorem ipsus Lorem ipsus Lorem ipsus Lorem ipsus Lorem ipsus Lorem ipsus Lorem ipsus Lorem ipsus';
        $calif1->enterado = '0';
        $calif1->save();

        $calif2 = new Calificacione();
        $calif2->user_id = '2';
        $calif2->asignatura_id = '2';
        $calif2->calificacion = '80';
        $calif2->bloque = '1';
        $calif2->observaciones = 'Lorem ipsus Lorem ipsus Lorem ipsus Lorem ipsus Lorem ipsus Lorem ipsus Lorem ipsus Lorem ipsus Lorem ipsus Lorem ipsus';
        $calif2->enterado = '1';
        $calif2->save();
    }
}
