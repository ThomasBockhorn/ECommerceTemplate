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
        Schema::create('customer_shippings', function (Blueprint $table) {
            $table->id();
			$table->string('CustomerShippingName');
			$table->string('CustomerShippingAddress');
			$table->string('CustomerShippingCity');
			$table->string('CustomerShippingState');
			$table->string('CustomerShippingZip');
			$table->string('CustomerShippingPhone');
			$table->string('CustomerShippingEmail');
			$table->boolean('CustomerShippingDefault');
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
        Schema::dropIfExists('customer_shippings');
    }
};
