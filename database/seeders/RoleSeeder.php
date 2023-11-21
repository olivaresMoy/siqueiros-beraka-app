<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Roles
        $rol = new Role();
        $rol->name = 'Admin';
        $rol->save();
        
        $rol = new Role();
        $rol->name = 'Alumno';
        $rol->save();

        $rol = new Role();
        $rol->name = 'Docente';
        $rol->save();

        $rol = new Role();
        $rol->name = 'Tutor';
        $rol->save();
    }
}
