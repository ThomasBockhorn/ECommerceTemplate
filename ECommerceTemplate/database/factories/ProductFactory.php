<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ProductSale;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
            return [
                'ProductName' => $this->faker->word(),
                'ProductDescription' => $this->faker->sentence(),
                'ProductCost' => $this->faker->randomFloat(2, 0, 1000),
            ];

    }
}
