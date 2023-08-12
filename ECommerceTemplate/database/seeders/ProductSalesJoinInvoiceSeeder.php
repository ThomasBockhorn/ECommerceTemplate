<?php

namespace Database\Seeders;

use App\Models\ProductSalesJoinInvoice;
use Illuminate\Database\Seeder;

class ProductSalesJoinInvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductSalesJoinInvoice::class::factory(10)->create();
    }
}
