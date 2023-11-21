<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tarea;

class TareaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Tarea
        $tarea1 = new Tarea();
        $tarea1->asignatura_id = '1';
        $tarea1->descripcion = 'Esta es una tarea que se entregara pronto de prueba.';
        $tarea1->enterado = '1';
        $tarea1->entrega = '2023-12-01';
        $tarea1->save();

        $tarea2 = new Tarea();
        $tarea2->asignatura_id = '1';
        $tarea2->descripcion = 'Esta es otra tarea de prueba.';
        $tarea2->enterado = '0';
        $tarea2->entrega = '2023-12-24';
        $tarea2->save();
    }
}
