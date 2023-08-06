<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{

    /**
     * @return void
     */
    public function test_model_product_exists(): void
    {
        $this->assertTrue(class_exists(\App\Models\Product::class));
    }

    /**
     * @return void
     */
    public function test_property_model_has_product_productname(): void
    {
        $product = new \App\Models\Product();

        $product->ProductName = 'Test Product';

        $this->assertEquals('Test Product', $product->ProductName);
    }
}
