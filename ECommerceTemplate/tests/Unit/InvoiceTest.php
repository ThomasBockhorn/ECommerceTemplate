<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Invoice;

class InvoiceTest extends TestCase
{
    public function test_to_see_if_invoice_model_exists()
    {
        $this->assertTrue(class_exists(Invoice::class));
    }

}
