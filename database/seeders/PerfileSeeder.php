<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Perfile;

class PerfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Perfiles
        $perfil1 = new Perfile();
        $perfil1->nombre = 'Moisés';
        $perfil1->apaterno = 'Olivares';
        $perfil1->amaterno = 'Encarnación';
        $perfil1->celular = '7441042627';
        $perfil1->sexo = 'M';
        $perfil1->role_id = '1';
        $perfil1->user_id = '1';
        $perfil1->save();


        $perfil1 = new Perfile();
        $perfil1->nombre = 'Héctor';
        $perfil1->apaterno = 'Hernández';
        $perfil1->amaterno = 'Escobar';
        $perfil1->celular = '7442053584';
        $perfil1->sexo = 'M';
        $perfil1->role_id = '1';
        $perfil1->user_id = '2';
        $perfil1->save();
        /*
        $perfil2 = new Perfile();
        $perfil2->nombre = 'User2';
        $perfil2->apaterno = 'Prueba2';
        $perfil2->amaterno = 'Prueba 2';
        $perfil2->celular = '7444658923';
        $perfil2->sexo = 'F';
        $perfil2->role_id = '4';
        $perfil2->user_id = '2';
        $perfil2->save();

        $perfil3 = new Perfile();
        $perfil3->nombre = 'User3';
        $perfil3->apaterno = 'Prueba3';
        $perfil3->amaterno = 'Prueba3';
        $perfil3->celular = '7445012345';
        $perfil3->sexo = 'M';
        $perfil3->role_id = '2';
        $perfil3->user_id = '3';
        $perfil3->save();

        $perfil3 = new Perfile();
        $perfil3->nombre = 'User4';
        $perfil3->apaterno = 'Prueba4';
        $perfil3->amaterno = 'Materno4';
        $perfil3->celular = '7448542145';
        $perfil3->sexo = 'F';
        $perfil3->role_id = '3';
        $perfil3->user_id = '4';
        $perfil3->save();
        */
    }
}