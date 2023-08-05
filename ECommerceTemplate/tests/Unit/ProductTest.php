<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Product;

class ProductTest extends TestCase
{

    /**
     * @return void
     */
    public function test_model_product_exists(): void
    {
        $this->assertTrue(class_exists(\App\Models\Product::class));
    }

}
