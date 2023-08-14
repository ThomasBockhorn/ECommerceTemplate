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
        Schema::create('customer_payments', function (Blueprint $table) {
            $table->id();
            $table->string('CustomerPaymentName');
            $table->string('CustomerPaymentCardNumber');
            $table->string('CustomerPaymentExpiration');
            $table->string('CustomerPaymentCVV');
            $table->string('CustomerPaymentDefault');
            $table->unsignedBigInteger('CustomerID');
            $table->foreign('CustomerID')->references('id')->on('customers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_payments');
    }
};
