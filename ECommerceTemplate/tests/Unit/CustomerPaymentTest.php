<?php

namespace Tests\Unit;

use App\Models\CustomerPayment;
use PHPUnit\Framework\TestCase;

class CustomerPaymentTest extends TestCase
{
    protected function getValidCustomerPayment(): CustomerPayment
    {
        $customerpayment = new CustomerPayment();
        $customerpayment->CustomerPaymentName = 'Test CustomerPayment';
        $customerpayment->CustomerPaymentCardNumber = 'Test CustomerPayment Description';
        $customerpayment->CustomerPaymentExpiration = 'Test CustomerPayment Description';
        $customerpayment->CustomerPaymentCVV = 'Test CustomerPayment Description';
        $customerpayment->CustomerPaymentDefault = 'Test CustomerPayment Description';
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

        $this->assertEquals('Test CustomerPayment', $customerpayment->CustomerPaymentName);
    }
}
