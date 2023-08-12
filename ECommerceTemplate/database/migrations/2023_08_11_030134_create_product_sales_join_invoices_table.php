<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_sales_join_invoices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ProductSaleID');
            $table->foreign('ProductSaleID')->references('id')->on('product_sales');
            $table->unsignedBigInteger('InvoiceID');
            $table->foreign('InvoiceID')->references('id')->on('invoices');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_sales_join_invoices');
    }
};
