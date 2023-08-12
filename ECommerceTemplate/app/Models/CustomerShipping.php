<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property mixed|string $CustomerShippingName
 * @property mixed|string $CustomerShippingAddress
 * @property mixed|string $CustomerShippingCity
 * @property mixed|string $CustomerShippingState
 * @property mixed|string $CustomerShippingZip
 * @property mixed|string $CustomerShippingPhone
 * @property mixed|string $CustomerShippingEmail
 * @property mixed|string $CustomerShippingDefault
 * @property mixed|string $CustomerID
 */
class CustomerShipping extends Model
{
    use HasFactory;

    protected $fillable = [
        'CustomerShippingName',
        'CustomerShippingAddress',
        'CustomerShippingCity',
        'CustomerShippingState',
        'CustomerShippingZip',
        'CustomerShippingPhone',
        'CustomerShippingEmail',
        'CustomerShippingDefault',
        'CustomerID',
    ];

	public function customer(): BelongsTo
	{
		return $this->belongsTo(Customer::class, 'CustomerID', 'id');
	}
}
