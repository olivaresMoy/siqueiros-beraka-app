<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Institucione;

class InstitucioneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Institución
        $instituto = new Institucione();
        $instituto->nombre = 'David Alfaro Siqueiros';
        $instituto->cct = 'LAJ25458001';
        $instituto->zona = '05';
        $instituto->telefono = '7441052489';
        $instituto->direccion = 'Av. Lagos No.65';
        $instituto->director = 'Héctor Hernández Escobar';
        $instituto->ciclo = '2023-2024';
        $instituto->save();
    }
}
