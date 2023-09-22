<?php

namespace Tests\Unit\ControllerTest;

use App\Http\Controllers\AdminController;
use Tests\TestCase;

class AdminControllerTest extends TestCase
{
    public function test_to_see_if_admin_controller_index_routes_works(): void
    {
        $response = $this->get('/admin');

        $response->assertStatus(200);
    }

    public function test_to_see_if_admin_controller_create_routes_works(): void
    {
        $response = $this->get('/admin/create');

        $response->assertStatus(200);
    }

    public function test_to_see_if_admin_controller_edit_routes_works(): void
    {
        $response = $this->get('/admin/1/edit');

        $response->assertStatus(200);
    }

    public function test_to_see_if_admin_controller_delete_routes_works(): void
    {
        $response = $this->delete('/admin/1');

        $response->assertStatus(200);
    }

    public function test_to_see_if_admin_controller_show_routes_works(): void
    {
        $response = $this->get('/admin/1');

        $response->assertStatus(200);
    }
}
