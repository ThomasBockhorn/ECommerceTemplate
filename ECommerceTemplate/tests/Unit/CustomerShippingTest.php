<?php

namespace Tests\Unit;

use App\Models\Customer;
use App\Models\CustomerShipping;
use PHPUnit\Framework\TestCase;

class CustomerShippingTest extends TestCase
{


	public function test_if_customer_shipping_name_exists_as_a_class(): void
    {
        $this->assertTrue(class_exists(CustomerShipping::class));
    }

	public function test_if_customer_shipping_name_is_correct(): void
	{
		$customerShipping = new CustomerShipping();
		$customerShipping->CustomerShippingName = 'John Doe';
		$this->assertEquals($customerShipping->CustomerShippingName, 'John Doe');
	}

	public function test_if_customer_shipping_address_is_correct(): void
	{
		$customerShipping = new CustomerShipping();
		$customerShipping->CustomerShippingAddress = '123 Main St';
		$this->assertEquals($customerShipping->CustomerShippingAddress, '123 Main St');
	}

	public function test_if_customer_shipping_city_is_correct(): void
	{
		$customerShipping = new CustomerShipping();
		$customerShipping->CustomerShippingCity = 'Anytown';
		$this->assertEquals($customerShipping->CustomerShippingCity, 'Anytown');
	}

	public function test_if_customer_shipping_state_is_correct(): void
	{
		$customerShipping = new CustomerShipping();
		$customerShipping->CustomerShippingState = 'CA';
		$this->assertEquals($customerShipping->CustomerShippingState, 'CA');
	}

	public function test_if_customer_shipping_zip_is_correct(): void
	{
		$customerShipping = new CustomerShipping();
		$customerShipping->CustomerShippingZip = '12345';
		$this->assertEquals($customerShipping->CustomerShippingZip, '12345');
	}

	public function test_if_customer_shipping_phone_is_correct(): void
	{
		$customerShipping = new CustomerShipping();
		$customerShipping->CustomerShippingPhone = '123-456-7890';
		$this->assertEquals($customerShipping->CustomerShippingPhone, '123-456-7890');
	}

	public function test_if_customer_shipping_email_is_correct(): void
	{
		$customerShipping = new CustomerShipping();
		$customerShipping->CustomerShippingEmail = 'thomas.bockhorn@gmail.com';
		$this->assertEquals($customerShipping->CustomerShippingEmail, 'thomas.bockhorn@gmail.com');
	}

	public function test_if_customer_shipping_default_is_correct(): void
	{
		$customerShipping = new CustomerShipping();
		$customerShipping->CustomerShippingDefault = '1';
		$this->assertEquals($customerShipping->CustomerShippingDefault, '1');
	}

	public function test_if_customer_id_is_correct(): void
	{
		$customerShipping = new CustomerShipping();
		$customerShipping->CustomerID = '1';
		$this->assertEquals($customerShipping->CustomerID, '1');
	}

	public function test_to_see_if_customer_method_is_in_customer_shipping_model(): void
	{
		$customerShipping = new CustomerShipping();
		$this->assertTrue(method_exists($customerShipping, 'customer'));
	}

	public function test_to_see_if_customer_shipping_method_is_in_customer_model(): void
	{
		$customer = new Customer();
		$this->assertTrue(method_exists($customer, 'customerShipping'));
	}
}
