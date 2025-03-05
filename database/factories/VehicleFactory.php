<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Dojo;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicle>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'make' => fake()->company(),
            'model' => fake()->word(),
            'year' => fake()->year(),
            'color' => fake()->colorName(),
            'weight' => fake()->numberBetween(1 , 1000),
            'dojo_id' => Dojo::inRandomOrder()->first()->id,
        ];
    }
}
