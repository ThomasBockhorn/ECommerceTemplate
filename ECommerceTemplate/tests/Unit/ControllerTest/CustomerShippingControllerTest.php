<?php

namespace Tests\Unit\ControllerTest;

use Tests\TestCase;

class CustomerShippingControllerTest extends TestCase
{
    public function test_to_see_if_customer_shipping_controller_index_routes_works(): void
    {
        $response = $this->get('/customer-shipping');

        $response->assertStatus(200);
    }

    public function test_to_see_if_customer_shipping_controller_create_routes_works(): void
    {
        $response = $this->get('/customer-shipping/create');

        $response->assertStatus(200);
    }

    public function test_to_see_if_customer_shipping_controller_edit_routes_works(): void
    {
        $response = $this->get('/customer-shipping/1/edit');

        $response->assertStatus(200);
    }

    public function test_to_see_if_customer_shipping_controller_delete_routes_works(): void
    {
        $response = $this->delete('/customer-shipping/1');

        $response->assertStatus(200);
    }

    public function test_to_see_if_customer_shipping_controller_show_routes_works(): void
    {
        $response = $this->get('/customer-shipping/1');

        $response->assertStatus(200);
    }
}
