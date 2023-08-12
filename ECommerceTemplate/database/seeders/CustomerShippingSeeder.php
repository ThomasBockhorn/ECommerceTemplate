<?php

namespace Database\Seeders;

use App\Models\CustomerShipping;
use Illuminate\Database\Seeder;

class CustomerShippingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CustomerShipping::factory()->count(10)->create();
    }
}
