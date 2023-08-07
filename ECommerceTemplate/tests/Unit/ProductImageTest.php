<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\ProductImage;

class ProductImageTest extends TestCase
{

    public function test_product_image_exists(): void
    {
        $this->assertTrue(class_exists(ProductImage::class));
    }
}
