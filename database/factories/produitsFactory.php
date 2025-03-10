<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class produitsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => $this->faker->randomNumber(2),
            'nom' => $this->faker->name(),
            'description' => $this->faker->sentence(),
            'image' => $this->faker->imageUrl(),
            'prix' => $this->faker->randomFloat(2, 1, 100),
            'quantite' => $this->faker->randomNumber(2),
            'created_at' => now(),
            'updated_at' => now(),
        ];


    }
}
