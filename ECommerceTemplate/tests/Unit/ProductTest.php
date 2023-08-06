<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use \App\Models\Product;

class ProductTest extends TestCase
{

    /**
     * @return Product
     */
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

    /**
     * @return void
     */
    public function test_product_model_has_property_productname(): void
    {
        $product = $this->getValidProduct();

        $this->assertEquals('Test Product', $product->ProductName);
    }

    /**
     * @return void
     */
    public function test_product_model_has_productname(): void
    {
        $this->assertContains('ProductName', $this->getValidProduct()->getFillable());
    }

    /**
     * @return void
     */
    public function test_product_model_has_property_productdescription(): void
    {
        $product = $this->getValidProduct();

        $this->assertEquals('Test Product Description', $product->ProductDescription);
    }

    /**
     * @return void
     */
    public function test_product_has_productdescription_property(): void
    {
        $this->assertContains('ProductDescription', $this->getValidProduct()->getFillable());
    }

    /**
     * @return void
     */
    public function test_product_has_productcost_property(): void
    {
        $this->assertContains('ProductCost', $this->getValidProduct()->getFillable());
    }

    /**
     * @return void
     */
    public function test_product_model_productcost_property_has_two_decimal_places()
    {
        $product = $this->getValidProduct();

        $this->assertEquals(21.60, $product->ProductCost);
    }

    public function test_to_see_if_product_cost_stays_float()
    {
        $product = $this->getValidProduct();

        $this->assertIsFloat($product->ProductCost);
    }


}
