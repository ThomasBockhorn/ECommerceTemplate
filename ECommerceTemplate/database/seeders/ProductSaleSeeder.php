<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductSale;

class ProductSaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductSale::factory(10)->create();
    }
}
