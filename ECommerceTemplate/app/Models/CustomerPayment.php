<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property mixed|string $CustomerPaymentName
 * @property mixed|string $CustomerPaymentCardNumber
 * @property mixed|string $CustomerPaymentExpiration
 * @property mixed|string $CustomerPaymentCVV
 * @property mixed|string $CustomerPaymentDefault
 * @property mixed|string $CustomerID
 */
class CustomerPayment extends Model
{
    use HasFactory;

    protected $fillable = [
        'CustomerPaymentName',
        'CustomerPaymentCardNumber',
        'CustomerPaymentExpiration',
        'CustomerPaymentCVV',
        'CustomerPaymentDefault',
        'CustomerID',
    ];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'CustomerID', 'id');
    }
}
