<?php

namespace Database\Factories;
use App\Models\User;
use App\Models\Asignatura;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Calificacione>
 */
class CalificacioneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'calificacion' => $this->faker->randomFloat(2, 0, 10),
            'bloque' => $this->faker->randomNumber(1),
            'observaciones' => $this->faker->paragraph(),
            'enterado' => $this->faker->boolean(),
            'user_id' => User::all()->random()->id,
            'asignatura_id' => Asignatura::all()->random()->id,
        ];
    }
}
