<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CustomerPayment>
 */
class CustomerPaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'CustomerPaymentName' => $this->faker->name,
            'CustomerPaymentCardNumber' => $this->faker->creditCardNumber,
            'CustomerPaymentExpiration' => $this->faker->creditCardExpirationDate,
            'CustomerPaymentCVV' => $this->faker->randomNumber(3),
            'CustomerPaymentDefault' => $this->faker->boolean,
            'CustomerID' => Customer::pluck('id')->random(),
        ];
    }
}
