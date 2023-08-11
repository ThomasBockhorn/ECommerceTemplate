<?php

namespace Tests\Unit;

use App\Models\Customer;
use PHPUnit\Framework\TestCase;

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
}
