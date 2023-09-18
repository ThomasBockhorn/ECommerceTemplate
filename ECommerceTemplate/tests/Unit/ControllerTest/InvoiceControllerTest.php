<?php

namespace Tests\Unit\ControllerTest;

use Tests\TestCase;

class InvoiceControllerTest extends TestCase
{
    public function test_to_see_if_invoice_controller_index_routes_works(): void
    {
        $response = $this->get('/invoices');

        $response->assertStatus(200);
    }

    public function test_to_see_if_invoice_controller_create_routes_works(): void
    {
        $response = $this->get('/invoices/create');

        $response->assertStatus(200);
    }

    public function test_to_see_if_invoice_controller_edit_routes_works(): void
    {
        $response = $this->get('/invoices/1/edit');

        $response->assertStatus(200);
    }

    public function test_to_see_if_invoice_controller_delete_routes_works(): void
    {
        $response = $this->delete('/invoices/1');

        $response->assertStatus(200);
    }

    public function test_to_see_if_invoice_controller_show_routes_works(): void
    {
        $response = $this->get('/invoices/1');

        $response->assertStatus(200);
    }
}
