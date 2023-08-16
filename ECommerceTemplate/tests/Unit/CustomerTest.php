<?php

namespace Tests\Unit;

use App\Models\Customer;
use App\Models\CustomerPayment;
use Tests\TestCase;

class CustomerTest extends TestCase
{
    public function test_to_see_if_customer_class_exists(): void
    {
        $this->assertTrue(class_exists(Customer::class));
    }

    public function test_to_see_if_customer_model_has_property_customername(): void
    {
        $customer = new Customer();
        $customer->CustomerName = 'John Doe';
        $this->assertEquals('John Doe', $customer->CustomerName);
    }

    public function test_to_see_if_customer_model_has_property_customeremail(): void
    {
        $customer = new Customer();
        $customer->CustomerEmail = 'test@test.com';
        $this->assertEquals('test@test.com', $customer->CustomerEmail);
    }

    public function test_to_see_if_customer_model_has_property_customerphone(): void
    {
        $customer = new Customer();
        $customer->CustomerPhone = '123-456-7890';
        $this->assertEquals('123-456-7890', $customer->CustomerPhone);
    }

    public function test_to_see_if_customer_model_has_property_customeraddress(): void
    {
        $customer = new Customer();
        $customer->CustomerAddress = '123 Main St';
        $this->assertEquals('123 Main St', $customer->CustomerAddress);
    }

    public function test_to_see_if_customer_model_has_property_customercity(): void
    {
        $customer = new Customer();
        $customer->CustomerCity = 'Anytown';
        $this->assertEquals('Anytown', $customer->CustomerCity);
    }

    public function test_to_see_if_customer_model_has_property_customerstate(): void
    {
        $customer = new Customer();
        $customer->CustomerState = 'NY';
        $this->assertEquals('NY', $customer->CustomerState);
    }

    public function test_to_see_if_customer_model_has_property_customerzip(): void
    {
        $customer = new Customer();
        $customer->CustomerZip = '12345';
        $this->assertEquals('12345', $customer->CustomerZip);
    }

    public function test_if_a_customer_as_a_one_to_many_relationship_to_invoice(): void
    {
        $this->assertTrue(method_exists(Customer::class, 'invoice'));
    }

    public function test_to_see_if_customer_shipping_method_is_in_customer_model(): void
    {
        $customer = new Customer();
        $this->assertTrue(method_exists($customer, 'customerShipping'));
    }

	public function test_to_see_if_customer_has_many_customer_payments(): void
	{
		$customer = Customer::factory()->create();
		$customerPayment = CustomerPayment::factory()->for($customer)->create();

		$this->assertTrue($customerPayment->customer()->exists());
		$this->assertEquals(1, $customerPayment->customer()->count());
	}

	public function test_to_see_if_customer_has_a_one_to_one_relationship_with_customer_shipping(): void
	{
		$customer = Customer::factory()->create();
		$customerShipping = CustomerPayment::factory()->for($customer)->create();

		$this->assertTrue($customerShipping->customer()->exists());
		$this->assertEquals(1, $customerShipping->customer()->count());
	}
}
