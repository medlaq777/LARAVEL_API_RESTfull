<?php

namespace Database\Factories;

use App\Models\Produit;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProduitFactory extends Factory
{
    protected $model = Produit::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->word,
            'description' => $this->faker->sentence,
            'image' => $this->faker->imageUrl,
            'prix' => $this->faker->randomFloat(2, 1, 100),
            'quantite' => $this->faker->numberBetween(1, 100),
        ];
    }
}
