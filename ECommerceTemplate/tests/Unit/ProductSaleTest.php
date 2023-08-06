<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\ProductSale;

/**
 *
 */
class ProductSaleTest extends TestCase
{

    /**
     * @return ProductSale
     */
    protected function getValidProductSale(): ProductSale
    {
        $productSale = new ProductSale();
        $productSale->ProductID = 1;
        $productSale->ProductSaleQuantity = 1;
        $productSale->ProductSalePrice = 21.5977;
        return $productSale;
    }

    /**
     * @return void
     */
    public function test_productsale_exists(): void
    {
        $this->assertTrue(class_exists(ProductSale::class));
    }


    /**
     * @return void
     */
    public function test_to_see_if_productsale_productID_exists()
    {
        $this->assertContains('ProductID', $this->getValidProductSale()->getFillable());

    }

    /**
     * @return void
     */
    public function test_if_productsalequantity_exists()
    {
        $this->assertContains('ProductSaleQuantity', $this->getValidProductSale()->getFillable());
    }

    /**
     * @return void
     */
    public function test_if_productsaleprice_exists()
    {
        $this->assertContains('ProductSalePrice', $this->getValidProductSale()->getFillable());
    }

    public function test_if_productsale_price_is_a_float()
    {
        $this->getValidProductSale();

        $this->assertIsFloat($this->getValidProductSale()->ProductSalePrice);
    }

    public function test_if_productsale_price_has_two_decimal_places()
    {
        $this->getValidProductSale();

        $this->assertEquals(21.60, $this->getValidProductSale()->ProductSalePrice);
    }


}
