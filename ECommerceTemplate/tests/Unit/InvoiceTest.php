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
}
