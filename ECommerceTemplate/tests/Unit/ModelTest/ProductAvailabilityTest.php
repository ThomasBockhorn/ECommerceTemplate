<?php

namespace Tests\Unit\ModelTest;

use Tests\TestCase;

class ProductAvailabilityTest extends TestCase
{
    public function test_to_see_if_product_availability_model_exists(): void
    {
        $this->assertTrue(class_exists('App\Models\ProductAvailability'));
    }


}
