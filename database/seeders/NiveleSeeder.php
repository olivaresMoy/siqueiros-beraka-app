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
        $nivel1->name = 'Preescolar';
        $nivel1->save();

        $nivel2 = new Nivele();
        $nivel2->institucione_id = '1';
        $nivel2->name = 'Primaria';
        $nivel2->save();

        $nivel3 = new Nivele();
        $nivel3->institucione_id = '1';
        $nivel3->name = 'Secundaria';
        $nivel3->save();

        $nivel4 = new Nivele();
        $nivel4->institucione_id = '1';
        $nivel4->name = 'Bachillerato';
        $nivel4->save();
    }
}
