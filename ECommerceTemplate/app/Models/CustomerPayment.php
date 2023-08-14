<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property mixed|string $CreditCardPaymentName
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
        'CreditCardPaymentName',
        'CustomerPaymentCardNumber',
        'CustomerPaymentExpiration',
        'CustomerPaymentCVV',
        'CustomerPaymentDefault',
        'CustomerID',
    ];

    protected $casts = [
		'CustomerPaymentDefault' => 'boolean',
	];

	protected function customerPaymentCardNumber(): attribute
	{
		return Attribute::make(
		  get: fn (string $value) => decrypt($value),
		  set : fn (string $value) => encrypt($value)
		);
	}

	protected function customerPaymentCVV(): attribute
	{
		return Attribute::make(
		  get: fn (string $value) => decrypt($value),
		  set : fn (string $value) => encrypt($value)
		);
	}

	public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'CustomerID', 'id');
    }
}
