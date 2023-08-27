<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(ProductSeeder::class);
        $this->call(ProductSaleSeeder::class);
        $this->call(ProductImageSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(InvoiceSeeder::class);
        $this->call(ProductSalesJoinInvoiceSeeder::class);
        $this->call(CustomerShippingSeeder::class);
        $this->call(CustomerPaymentSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(ProductAvailabilitySeeder::class);
    }
}
