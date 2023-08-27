<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductAvailability>
 */
class ProductAvailabilityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ProductID' => Product::pluck('id')->random(),
            'ProductAvailabilityDate' => $this->faker->dateTimeBetween('now', '+1 year')->format('Y-m-d'),
            'ProductStatus' => $this->faker->randomElement(['Available', 'Unavailable', 'Discontinued', 'Backorder', 'Preorder', 'SoldOut', 'OnSale']),
        ];
    }
}
