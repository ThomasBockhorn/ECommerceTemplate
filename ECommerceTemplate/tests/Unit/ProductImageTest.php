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

    public function test_to_see_if_product_image_url_exists(): void
    {
        $this->assertContains('ProductImageURL', $this->getValidProductImage()->getFillable());
    }

    public function test_to_see_if_product_has_a_one_to_many_relationship_with_product_image(): void
    {
        $this->assertTrue(method_exists(ProductImage::class, 'product'));
    }
}
