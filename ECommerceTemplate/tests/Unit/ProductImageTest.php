<?php

namespace Tests\Unit;

use App\Models\ProductImage;
use PHPUnit\Framework\TestCase;

class ProductImageTest extends TestCase
{
    public function test_product_image_exists(): void
    {
        $this->assertTrue(class_exists(ProductImage::class));
    }
}
