<?php

namespace Tests\Unit;

use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductSale;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase, WithFaker;

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

    public function test_to_see_if_a_productsale_belongs_to_a_product(): void
    {
        $product = new Product([
            'ProductName' => 'Test Product',
            'ProductDescription' => 'Test Product Description',
            'ProductCost' => 21.5977,
            'ProductSaleID' => 1,
        ]);

        $productSale = new ProductSale([
            'ProductID' => $product->id,
            'ProductSaleQuantity' => 1,
            'ProductSalePrice' => 21.5977,
        ]);

        $this->assertEquals($product->id, $productSale->ProductID);
    }

    public function test_to_see_if_product_image_has_one_to_many_relationship()
    {
        $this->assertTrue(method_exists(Product::class, 'productImage'));

    }
}
