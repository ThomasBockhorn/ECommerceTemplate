<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use \App\Models\Product;

class ProductTest extends TestCase
{

    protected function getValidProduct(): Product
    {
        $product = new Product();
        $product->ProductName = 'Test Product';
        $product->ProductDescription = 'Test Product Description';
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
    public function test_product_model_has_property_productdescription(): void
    {
        $product = $this->getValidProduct();

        $this->assertEquals('Test Product Description', $product->ProductDescription);
    }


}
