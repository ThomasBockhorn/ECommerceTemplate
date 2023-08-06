<?php

namespace Tests\Unit;

use App\Models\Product;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    protected function getValidProduct(): Product
    {
        $product = new Product();
        $product->ProductName = 'Test Product';
        $product->ProductDescription = 'Test Product Description';
        $product->ProductCost = 21.5977;

        return $product;
    }

    public function test_model_product_exists(): void
    {
        $this->assertTrue(class_exists(Product::class));
    }

    public function test_product_model_has_property_productname(): void
    {
        $product = $this->getValidProduct();

        $this->assertEquals('Test Product', $product->ProductName);
    }

    public function test_product_model_has_productname(): void
    {
        $this->assertContains('ProductName', $this->getValidProduct()->getFillable());
    }

    public function test_product_model_has_property_productdescription(): void
    {
        $product = $this->getValidProduct();

        $this->assertEquals('Test Product Description', $product->ProductDescription);
    }

    public function test_product_has_productdescription_property(): void
    {
        $this->assertContains('ProductDescription', $this->getValidProduct()->getFillable());
    }

    public function test_product_has_productcost_property(): void
    {
        $this->assertContains('ProductCost', $this->getValidProduct()->getFillable());
    }

    public function test_product_model_productcost_property_has_two_decimal_places(): void
    {
        $product = $this->getValidProduct();

        $this->assertEquals(21.60, $product->ProductCost);
    }

    public function test_to_see_if_product_cost_stays_float(): void
    {
        $product = $this->getValidProduct();

        $this->assertIsFloat($product->ProductCost);
    }
}
