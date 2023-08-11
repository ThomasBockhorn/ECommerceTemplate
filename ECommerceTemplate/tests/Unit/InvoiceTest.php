<?php

namespace Tests\Unit;

use App\Models\Invoice;
use PHPUnit\Framework\TestCase;

class InvoiceTest extends TestCase
{
    public function test_to_see_if_invoice_model_exists(): void
    {
        $this->assertTrue(class_exists(Invoice::class));
    }

    public function test_to_see_if_invoice_model_has_property_invoicenumber(): void
    {
        $invoice = new Invoice();
        $invoice->InvoiceNumber = 1;
        $this->assertEquals(1, $invoice->InvoiceNumber);
    }

    public function test_to_see_if_invoice_model_has_property_invoicedate(): void
    {
        $invoice = new Invoice();
        $invoice->InvoiceDate = '2021-01-01';
        $this->assertEquals('2021-01-01', $invoice->InvoiceDate);
    }

    public function test_to_see_if_invoice_model_has_property_invoicetotal(): void
    {
        $invoice = new Invoice();
        $invoice->InvoiceTotal = 1.00;
        $this->assertEquals(1.00, $invoice->InvoiceTotal);
    }

    public function test_to_see_if_invoice_has_a_belongs_to_customer(): void
    {
        $this->assertTrue(method_exists(Invoice::class, 'customer'));
    }

}
