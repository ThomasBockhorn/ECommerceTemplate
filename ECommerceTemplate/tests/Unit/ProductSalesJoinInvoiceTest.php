<?php

namespace Tests\Unit;

use App\Models\ProductSalesJoinInvoice;
use PHPUnit\Framework\TestCase;

class ProductSalesJoinInvoiceTest extends TestCase
{
    public function test_to_see_if_product_sale_is_a_method_in_product_sale_join_invoice()
    {
        $this->assertTrue(method_exists(ProductSalesJoinInvoice::class, 'productSales'));
    }

    public function test_see_if_invoice_is_a_method_in_product_sale_join_invoice()
    {
        $this->assertTrue(method_exists(ProductSalesJoinInvoice::class, 'invoices'));
    }
}
