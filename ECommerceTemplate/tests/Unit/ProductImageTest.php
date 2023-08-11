<?php

namespace Tests\Unit;

use App\Models\ProductImage;
use PHPUnit\Framework\TestCase;

class ProductImageTest extends TestCase
{
    public function getValidProductImage(): ProductImage
    {
        return new ProductImage([
            'ProductID' => 1,
            'ProductImageURL' => 'https://via.placeholder.com/150',
            'ProductImageName' => 'Test Image',
            'ProductImageDescription' => 'Test Image Description',
        ]);
    }

    public function test_product_image_exists(): void
    {
        $this->assertTrue(class_exists(ProductImage::class));
    }

    public function test_to_see_if_product_image_productID_exists(): void
    {
        $this->assertContains('ProductID', $this->getValidProductImage()->getFillable());
    }

    public function test_to_see_if_productid_is_in_product_image_property(): void
    {
        $productImage = new ProductImage();
        $productImage->ProductID = 1;
        $this->assertEquals(1, $productImage->ProductID);
    }

    public function test_to_see_if_product_image_url_is_a_property(): void
    {
        $productImage = new ProductImage();
        $productImage->ProductImageURL = 'https://via.placeholder.com/150';
        $this->assertEquals('https://via.placeholder.com/150', $productImage->ProductImageURL);
    }

    public function test_to_see_if_product_image_url_exists(): void
    {
        $this->assertContains('ProductImageURL', $this->getValidProductImage()->getFillable());
    }

    public function test_to_see_if_product_has_a_one_to_many_relationship_with_product_image(): void
    {
        $this->assertTrue(method_exists(ProductImage::class, 'product'));
    }
}
