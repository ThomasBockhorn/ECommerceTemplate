<?php

namespace Tests\Unit\ControllerTest;

use Tests\TestCase;

class CustomerControllerTest extends TestCase
{
    public function test_to_see_if_customer_controller_index_works(): void
    {
        $response = $this->get('/customers');

        $response->assertStatus(200);
    }

    public function test_to_see_if_customer_controller_create_works(): void
    {
        $response = $this->get('/customers/create');

        $response->assertStatus(200);
    }

    public function test_to_see_if_customer_controller_edit_works(): void
    {
        $response = $this->get('/customers/1/edit');

        $response->assertStatus(200);
    }

    public function test_to_see_if_customer_controller_delete_works(): void
    {
        $response = $this->delete('/customers/1');

        $response->assertStatus(200);
    }
}
