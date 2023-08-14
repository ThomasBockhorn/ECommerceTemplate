<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CustomerShipping>
 */
class CustomerShippingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'CustomerShippingName' => $this->faker->name,
            'CustomerShippingAddress' => $this->faker->streetAddress,
            'CustomerShippingCity' => $this->faker->city,
            'CustomerShippingState' => $this->faker->state,
            'CustomerShippingZip' => $this->faker->postcode,
            'CustomerShippingPhone' => $this->faker->phoneNumber,
            'CustomerShippingEmail' => $this->faker->email,
            'CustomerShippingDefault' => $this->faker->boolean,
            'CustomerID' => Customer::pluck('id')->random(),
        ];
    }
}
