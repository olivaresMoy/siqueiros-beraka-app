<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Nivele;

class NiveleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Nivel
        $nivel1 = new Nivele();
        $nivel1->institucione_id = '1';
        $nivel1->nombre = 'Preescolar';
        $nivel1->save();

        $nivel2 = new Nivele();
        $nivel2->institucione_id = '1';
        $nivel2->nombre = 'Primaria';
        $nivel2->save();

        $nivel3 = new Nivele();
        $nivel3->institucione_id = '1';
        $nivel3->nombre = 'Secundaria';
        $nivel3->save();

        $nivel4 = new Nivele();
        $nivel4->institucione_id = '1';
        $nivel4->nombre = 'Bachillerato';
        $nivel4->save();
    }
}
