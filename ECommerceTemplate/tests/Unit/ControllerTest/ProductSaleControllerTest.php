<?php

namespace Tests\Unit\ControllerTest;

use App\Http\Controllers\ProductSaleController;
use Tests\TestCase;

class ProductSaleControllerTest extends TestCase
{
    public function test_to_see_if_product_sale_controller_index_routes_works(): void
    {
        $response = $this->get('/product-sales');

        $response->assertStatus(200);
    }

    public function test_to_see_if_product_sale_controller_create_routes_works(): void
    {
        $response = $this->get('/product-sales/create');

        $response->assertStatus(200);
    }

    public function test_to_see_if_product_sale_controller_edit_routes_works(): void
    {
        $response = $this->get('/product-sales/1/edit');

        $response->assertStatus(200);
    }

    public function test_to_see_if_product_sale_controller_delete_routes_works(): void
    {
        $response = $this->delete('/product-sales/1');

        $response->assertStatus(200);
    }

    public function test_to_see_if_product_sale_controller_show_routes_works(): void
    {
        $response = $this->get('/product-sales/1');

        $response->assertStatus(200);
    }
}
