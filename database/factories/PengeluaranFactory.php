<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PengeluaranFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tanggal' => $this->faker->dateTimeBetween('+0 years', '+1 years'),
            'kategori' => $this->faker->randomElement(['Utama', 'Sampingan', 'Investasi']),
            'nominal' => $this->faker->numberBetween(100, 10000000),
            'keterangan' => Str::random(10),
            'status' => $this->faker->randomElement([0, 1]),
        ];
    }
}
