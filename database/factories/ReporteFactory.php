<?php

namespace Database\Factories;
use App\Models\User;
use App\Models\Asignatura;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reporte>
 */
class ReporteFactory extends Factory
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
            'cumplio_temario' => $this->faker->boolean(),
            'cumplio_tareas' => $this->faker->boolean(),
            'cumplio_conducta' => $this->faker->boolean(),
            'cumplio_higiene' => $this->faker->boolean(),
            'cumplio_utiles' => $this->faker->boolean(),
            'cumplio_apuntes' => $this->faker->boolean(),
            'observaciones' => $this->faker->paragraph(),
            'enterado' => $this->faker->boolean(),
            'user_id' => User::all()->random()->id,
            'asignatura_id' => Asignatura::all()->random()->id,
        ];
    }
}
