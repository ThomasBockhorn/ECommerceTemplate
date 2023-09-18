<?php

namespace Tests\Unit\ControllerTest;

use Tests\TestCase;

class ProductImageControllerTest extends TestCase
{
    public function test_to_see_if_product_image_controller_index_routes_works(): void
    {
        $response = $this->get('/product-images');

        $response->assertStatus(200);
    }

    public function test_to_see_if_product_image_controller_create_routes_works(): void
    {
        $response = $this->get('/product-images/create');

        $response->assertStatus(200);
    }

    public function test_to_see_if_product_image_controller_edit_routes_works(): void
    {
        $response = $this->get('/product-images/1/edit');

        $response->assertStatus(200);
    }

    public function test_to_see_if_product_image_controller_delete_routes_works(): void
    {
        $response = $this->delete('/product-images/1');

        $response->assertStatus(200);
    }

    public function test_to_see_if_product_image_controller_show_routes_works(): void
    {
        $response = $this->get('/product-images/1');

        $response->assertStatus(200);
    }
}
