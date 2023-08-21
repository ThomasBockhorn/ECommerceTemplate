<?php

namespace Tests\Unit;

use App\Models\Customer;
use App\Models\CustomerPayment;
use Tests\TestCase;

class CustomerPaymentTest extends TestCase
{
    protected function getValidCustomerPayment(): CustomerPayment
    {
        $customerpayment = new CustomerPayment();
        $customerpayment->CreditCardPaymentName = 'Test CustomerPayment';
        $customerpayment->CustomerPaymentCardNumber = 'Test CustomerPayment Description';
        $customerpayment->CustomerPaymentExpiration = 'Test CustomerPayment Description';
        $customerpayment->CustomerPaymentCVV = 'Test CustomerPayment Description';
        $customerpayment->CustomerPaymentDefault = 1;
        $customerpayment->CustomerID = 'Test CustomerPayment Description';

        return $customerpayment;
    }

    public function test_to_see_if_CustomerPayment_exists(): void
    {
        $this->assertTrue(class_exists('App\Models\CustomerPayment'));
    }

    public function test_to_see_if_CustomerPayment_has_CustomerPaymentName_property(): void
    {
        $customerpayment = $this->getValidCustomerPayment();

        $this->assertEquals('Test CustomerPayment', $customerpayment->CreditCardPaymentName);
    }

    public function test_to_see_if_CustomerPayment_has_CustomerPaymentCardNumber_property(): void
    {
        $customerpayment = $this->getValidCustomerPayment();

        $this->assertEquals('Test CustomerPayment Description', $customerpayment->CustomerPaymentCardNumber);
    }

    public function test_to_see_if_CustomerPayment_has_CustomerPaymentExpiration_property(): void
    {
        $customerpayment = $this->getValidCustomerPayment();

        $this->assertEquals('Test CustomerPayment Description', $customerpayment->CustomerPaymentExpiration);
    }

    public function test_to_see_if_CustomerPayment_has_CustomerPaymentCVV_property(): void
    {
        $customerpayment = $this->getValidCustomerPayment();

        $this->assertEquals('Test CustomerPayment Description', $customerpayment->CustomerPaymentCVV);
    }

    public function test_to_see_if_CustomerPayment_has_CustomerPaymentDefault_property(): void
    {
        $customerpayment = $this->getValidCustomerPayment();

        $this->assertEquals('Test CustomerPayment Description', $customerpayment->CustomerPaymentDefault);
    }

    public function test_to_see_if_CustomerPayment_has_CustomerID_property(): void
    {
        $customerpayment = $this->getValidCustomerPayment();

        $this->assertEquals('Test CustomerPayment Description', $customerpayment->CustomerID);
    }

    public function test_to_see_if_CustomerPayment_has_CustomerPaymentName_property_in_fillable(): void
    {
        $this->assertContains('CreditCardPaymentName', $this->getValidCustomerPayment()->getFillable());
    }

    public function test_to_see_if_Customer_and_CustomerPayment_has_a_one_to_many_relationship(): void
    {
        $customerPayment = CustomerPayment::factory()
            ->for(Customer::factory()->create())
            ->create();

        $this->assertTrue($customerPayment->customer()->exists());
    }
}
