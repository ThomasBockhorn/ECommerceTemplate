<?php

namespace Tests\Unit\ControllerTest;

use Tests\TestCase;

class ProductAvailabilityControllerTest extends TestCase
{
    public function test_to_see_if_product_availability_controller_index_routes_works(): void
    {
        $response = $this->get('/product-availability');

        $response->assertStatus(200);
    }

    public function test_to_see_if_product_availability_controller_create_routes_works(): void
    {
        $response = $this->get('/product-availability/create');

        $response->assertStatus(200);
    }

    public function test_to_see_if_product_availability_controller_edit_routes_works(): void
    {
        $response = $this->get('/product-availability/1/edit');

        $response->assertStatus(200);
    }

    public function test_to_see_if_product_availability_controller_delete_routes_works(): void
    {
        $response = $this->delete('/product-availability/1');

        $response->assertStatus(200);
    }

    public function test_to_see_if_product_availability_controller_show_routes_works(): void
    {
        $response = $this->get('/product-availability/1');

        $response->assertStatus(200);
    }
}
