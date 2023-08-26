<?php

namespace Tests\Unit\ControllerTest;


use Tests\TestCase;

class ProductControllerTest extends TestCase
{
    public function test_to_see_if_the_products_are_viewable(): void
    {
        $response = $this->get('/products');

        $response->assertStatus(200);
    }

    public function test_to_see_if_the_products_are_viewable_by_id(): void
    {
        $response = $this->get('/products/1');

        $response->assertStatus(200);
    }


}
