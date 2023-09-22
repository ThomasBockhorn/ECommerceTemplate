<?php

namespace Tests\Unit\ControllerTest;

use App\Http\Controllers\ProductSalesJoinInvoiceController;
use Tests\TestCase;

class ProductSalesJoinInvoiceControllerTest extends TestCase
{
    public function test_to_see_if_product_sales_join_invoice_controller_index_routes_works(): void
    {
        $response = $this->get('/product-sales-join-invoice');

        $response->assertStatus(200);
    }

    public function test_to_see_if_product_sales_join_invoice_controller_create_routes_works(): void
    {
        $response = $this->get('/product-sales-join-invoice/create');

        $response->assertStatus(200);
    }

    public function test_to_see_if_product_sales_join_invoice_controller_edit_routes_works(): void
    {
        $response = $this->get('/product-sales-join-invoice/1/edit');

        $response->assertStatus(200);
    }

    public function test_to_see_if_product_sales_join_invoice_controller_delete_routes_works(): void
    {
        $response = $this->delete('/product-sales-join-invoice/1');

        $response->assertStatus(200);
    }

    public function test_to_see_if_product_sales_join_invoice_controller_show_routes_works(): void
    {
        $response = $this->get('/product-sales-join-invoice/1');

        $response->assertStatus(200);
    }
}
