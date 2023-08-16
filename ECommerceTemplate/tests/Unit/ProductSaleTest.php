<?php

namespace Tests\Unit;

use App\Models\Product;
use App\Models\ProductSale;
use App\Models\ProductSalesJoinInvoice;
use Tests\TestCase;

class ProductSaleTest extends TestCase
{
    protected function getValidProductSale(): ProductSale
    {
        $productSale = new ProductSale();
        $productSale->ProductID = 1;
        $productSale->ProductSaleQuantity = -1;
        $productSale->ProductSalePrice = 21.5977;

        return $productSale;
    }

    public function test_productsale_exists(): void
    {
        $this->assertTrue(class_exists(ProductSale::class));
    }

    public function test_to_see_if_productsale_productID_exists(): void
    {
        $this->assertContains('ProductID', $this->getValidProductSale()->getFillable());

    }

    public function test_if_productsalequantity_exists(): void
    {
        $this->assertContains('ProductSaleQuantity', $this->getValidProductSale()->getFillable());
    }

    public function test_if_productsaleprice_exists(): void
    {
        $this->assertContains('ProductSalePrice', $this->getValidProductSale()->getFillable());
    }

    public function test_if_productsale_price_is_a_float(): void
    {
        $this->getValidProductSale();

        $this->assertIsFloat($this->getValidProductSale()->ProductSalePrice);
    }

    public function test_if_productsale_price_has_two_decimal_places(): void
    {
        $this->getValidProductSale();

        $this->assertEquals(21.60, $this->getValidProductSale()->ProductSalePrice);
    }

    public function test_producesale_quantity_is_an_integer(): void
    {
        $this->getValidProductSale();

        $this->assertIsInt($this->getValidProductSale()->ProductSaleQuantity);
    }

    public function test_productsale_quantity_is_greater_than_zero(): void
    {
        $this->getValidProductSale();

        $this->assertGreaterThan(-1, $this->getValidProductSale()->ProductSaleQuantity);
    }

	public function test_to_see_if_a_productsale_belongs_to_a_product(): void
	{
		$product = Product::factory()->create();
		$productSale = ProductSale::factory()->for($product)->create();

		$this->assertTrue($productSale->product()->exists());
		$this->assertEquals(1, $productSale->product()->count());
	}
}
