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
        Schema::create('product_availabilities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ProductID');
            $table->foreign('ProductID')->references('id')->on('customers');
            $table->string('ProductAvailabilityDate');
            $table->string('ProductStatus')->default('Available');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_availabilities');
    }
};
