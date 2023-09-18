<?php

namespace Database\Seeders;

use App\Models\ProductAvailability;
use Illuminate\Database\Seeder;

class ProductAvailabilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductAvailability::factory()->count(10)->create();
    }
}
