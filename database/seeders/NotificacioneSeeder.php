<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Notificacione;

class NotificacioneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Notificaciones
        $notificacion1 = new Notificacione();
        $notificacion1->role_id = '2';
        $notificacion1->titulo = 'Nueva noticia';
        $notificacion1->descripcion = 'Este es el cuerpo de la noticia del mensaje actual.';
        $notificacion1->save();
    }
}
