<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\ProductSale;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductSale>
 */
class ProductSaleFactory extends Factory
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
            'ProductSaleQuantity' => $this->faker->randomNumber(2),
            'ProductSalePrice' => $this->faker->randomFloat(2, 0, 1000)
        ];
    }
}
