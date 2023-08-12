<?php

namespace Tests\Unit;

use App\Models\CustomerShipping;
use PHPUnit\Framework\TestCase;

class CustomerShippingTest extends TestCase
{
    public function test_if_customer_shipping_name_exists_as_a_class(): void
    {
        $this->assertTrue(class_exists(CustomerShipping::class));
    }
}
