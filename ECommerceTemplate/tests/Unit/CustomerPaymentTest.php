<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class CustomerPaymentTest extends TestCase
{
	public function test_to_see_if_CustomerPayment_exists(): void
	{
		$this->assertTrue(class_exists('App\Models\CustomerPayment'));
	}

}
