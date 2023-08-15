<?php

namespace Tests\Unit;

use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductSale;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    protected function getValidProduct(): Product
    {
        $product = new Product();
        $product->ProductName = 'Test Product';
        $product->ProductDescription = 'Test Product Description';
        $product->ProductCost = 21.5977;
        $product->ProductSaleID = 1;

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
        $product = $this->getValidProduct();

        $productSale = new ProductSale([
            'ProductID' => $product->id,
            'ProductSaleQuantity' => 1,
            'ProductSalePrice' => 21.5977,
        ]);

        $this->assertEquals($product->id, $productSale->ProductID);
    }

    public function test_to_see_if_product_has_one_to_one_relationship_with_productsale(): void
    {
        $this->assertTrue(method_exists(Product::class, 'productSale'));
    }

    public function test_to_see_if_product_image_has_one_to_many_relationship(): void
    {
        $this->assertTrue(method_exists(Product::class, 'productImage'));

    }

    public function test_to_see_if_product_has_many_product_images(): void
    {
        $product = new Product([
            'ProductName' => 'Test Product',
            'ProductDescription' => 'Test Product Description',
            'ProductCost' => 21.5977,
            'ProductSaleID' => 1,
        ]);

        $productImage = new ProductImage([
            'ProductID' => $product->id,
            'ProductImageName' => 'Test Image',
            'ProductImageDescription' => 'Test Image Description',
            'ProductImageURL' => 'https://via.placeholder.com/150',
        ]);

        $this->assertEquals($product->id, $productImage->ProductID);
    }

	public function test_to_see_if_one_to_one_relationship_between_product_and_product_sales(): void
	{

		$productSale = ProductSale::factory()
		  ->for(Product::factory()->create())
		  ->create();

		$this->assertTrue($productSale->product()->exists());

	}


}
