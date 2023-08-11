<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'CustomerName' => $this->faker->name,
            'CustomerEmail' => $this->faker->email,
            'CustomerPhone' => $this->faker->phoneNumber,
            'CustomerAddress' => $this->faker->streetAddress,
            'CustomerCity' => $this->faker->city,
            'CustomerState' => $this->faker->state,
            'CustomerZip' => $this->faker->postcode,
        ];
    }
}
