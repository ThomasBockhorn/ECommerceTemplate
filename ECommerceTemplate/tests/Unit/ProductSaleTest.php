<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ProductSaleTest extends TestCase
{
    /**
     * @return void
     */
    public function test_productsale_exists(): void
    {
        $this->assertTrue(class_exists(\App\Models\ProductSale::class));
    }
}
