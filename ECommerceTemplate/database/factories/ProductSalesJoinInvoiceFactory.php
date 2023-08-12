<?php

namespace Database\Factories;

use App\Models\Invoice;
use App\Models\ProductSale;
use App\Models\ProductSalesJoinInvoice;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ProductSalesJoinInvoice>
 */
class ProductSalesJoinInvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ProductSaleID' => ProductSale::pluck('id')->random(),
            'InvoiceID' => Invoice::pluck('id')->random(),
        ];
    }
}
