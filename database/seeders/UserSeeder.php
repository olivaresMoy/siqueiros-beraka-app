<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Usuarios
        $usuario = new User();
        $usuario->name = 'Moy';
        $usuario->email = 'olivares.moy@gmail.com';
        $usuario->email_verified_at = now();
        $usuario->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // password
        //$usuario->remember_token = Str::random(10);
        $usuario->save();

        $usuario2 = new User();
        $usuario2->name = 'Usuario2';
        $usuario2->email = 'user2@prueba.com';
        $usuario2->email_verified_at = now();
        $usuario2->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // password
        //$usuario2->remember_token = Str::random(10);
        $usuario2->save();

        $usuario3 = new User();
        $usuario3->name = 'Usuario3';
        $usuario3->email = 'user3@prueba.com';
        $usuario3->email_verified_at = now();
        $usuario3->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // password
        //$usuario3->remember_token = Str::random(10);
        $usuario3->save();
    }
}
