<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'InvoiceNumber' => $this->faker->numberBetween(1, 100),
            'InvoiceDate' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'InvoiceTotal' => $this->faker->randomFloat(2, 0, 1000),
            'CustomerID' => Customer::pluck('id')->random(),
        ];
    }
}
