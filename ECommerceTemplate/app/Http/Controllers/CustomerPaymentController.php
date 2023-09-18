<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustomerPaymentRequest;
use App\Http\Requests\UpdateCustomerPaymentRequest;
use App\Models\CustomerPayment;

class CustomerPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCustomerPaymentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CustomerPayment $customerPayment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CustomerPayment $customerPayment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomerPaymentRequest $request, CustomerPayment $customerPayment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CustomerPayment $customerPayment)
    {
        //
    }
}
