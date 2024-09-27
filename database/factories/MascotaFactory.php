<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Mascota;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mascota>
 */
class MascotaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->firstName(),
            'especie' => $this->faker->randomElement(['Perro', 'Gato', 'Ave', 'Reptil', 'Roedor']), 
            'fecha_nacimiento' => $this->faker->date(),
            'propietario' => $this->faker->name(),
        ];
    }
}
