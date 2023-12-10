<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Asignatura;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Asistencia>
 */
class AsistenciaFactory extends Factory
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
            'estatus' => $this->faker->randomElement(['Asistencia','Falta']),
            'user_id' => User::all()->random()->id,
            'asignatura_id' => Asignatura::all()->random()->id,
        ];
    }
}
