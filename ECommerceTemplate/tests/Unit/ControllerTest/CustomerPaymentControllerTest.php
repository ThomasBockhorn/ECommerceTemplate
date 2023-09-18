<?php

namespace Tests\Unit\ControllerTest;

use Tests\TestCase;

class CustomerPaymentControllerTest extends TestCase
{
    public function test_to_see_if_customer_payment_controller_index_routes_works(): void
    {
        $response = $this->get('/customer-payments');

        $response->assertStatus(200);
    }

    public function test_to_see_if_customer_payment_controller_create_routes_works(): void
    {
        $response = $this->get('/customer-payments/create');

        $response->assertStatus(200);
    }

    public function test_to_see_if_customer_payment_controller_edit_routes_works(): void
    {
        $response = $this->get('/customer-payments/1/edit');

        $response->assertStatus(200);
    }

    public function test_to_see_if_customer_payment_controller_delete_routes_works(): void
    {
        $response = $this->delete('/customer-payments/1');

        $response->assertStatus(200);
    }

    public function test_to_see_if_customer_payment_controller_show_routes_works(): void
    {
        $response = $this->get('/customer-payments/1');

        $response->assertStatus(200);
    }

}
