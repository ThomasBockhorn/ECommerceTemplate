<?php

namespace Tests\Unit\ModelTest;

use App\Enums\ProductStatusEnum;
use App\Models\ProductAvailability;
use Tests\TestCase;

class ProductAvailabilityTest extends TestCase
{
    public function test_to_see_if_product_availability_model_exists(): void
    {
        $this->assertTrue(class_exists('App\Models\ProductAvailability'));
    }

    public function test_to_see_if_product_status_is_restricted_to_a_predetermined_status(): void
    {
        $productAvailability = new ProductAvailability();
        $productAvailability->ProductStatus = ProductStatusEnum::Available;
        $this->assertEquals('Available', $productAvailability->ProductStatus->value);
    }

    public function test_to_see_if_product_status_is_restricted_to_a_predetermined_status_2(): void
    {
        $productAvailability = new ProductAvailability();
        $productAvailability->ProductStatus = ProductStatusEnum::Unavailable;
        $this->assertEquals('Unavailable', $productAvailability->ProductStatus->value);
    }

    public function test_to_see_if_product_availability_has_a_belongs_to_product(): void
    {
        $this->assertTrue(method_exists(ProductAvailability::class, 'product'));
    }



}
