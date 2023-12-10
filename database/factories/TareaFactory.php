<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Asignatura;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tarea>
 */
class TareaFactory extends Factory
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
            'descripcion' => $this->faker->paragraph(),
            'enterado' => $this->faker->boolean(),
            'entrega' => $this->faker->date(),
            'asignatura_id' => Asignatura::all()->random()->id,
        ];
    }
}
