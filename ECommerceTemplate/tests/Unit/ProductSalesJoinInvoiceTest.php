<?php

namespace Tests\Unit;

use App\Models\ProductSalesJoinInvoice;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

/**
 * @method assertClassHas(string $string, string $class)
 */
class ProductSalesJoinInvoiceTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    public function test_to_see_if_product_sale_is_a_method_in_product_sale_join_invoice(): void
    {
        $this->assertTrue(method_exists(ProductSalesJoinInvoice::class, 'productSales'));
    }

    public function test_see_if_invoice_is_a_method_in_product_sale_join_invoice(): void
    {
        $this->assertTrue(method_exists(ProductSalesJoinInvoice::class, 'invoices'));
    }
}
