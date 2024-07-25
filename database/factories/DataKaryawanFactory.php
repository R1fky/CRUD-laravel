<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DataKaryawan>
 */
class DataKaryawanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nip' => fake()->randomNumber(5, false),
            'name' => fake()->name(),
            'alamat' => fake()->sentence(8, false),
            'bagian' => fake()->sentence(2, false)
        ];
    }
}
