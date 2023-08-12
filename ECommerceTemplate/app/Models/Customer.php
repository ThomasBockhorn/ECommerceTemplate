<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @property mixed|string $CustomerName
 * @property mixed|string $CustomerEmail
 * @property mixed|string $CustomerPhone
 * @property mixed|string $CustomerAddress
 * @property mixed|string $CustomerCity
 * @property mixed|string $CustomerState
 * @property mixed|string $CustomerZip
 */
class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'CustomerName',
        'CustomerEmail',
        'CustomerPhone',
        'CustomerAddress',
        'CustomerCity',
        'CustomerState',
        'CustomerZip',
    ];

    public function invoice(): HasMany
    {
        return $this->hasMany(Invoice::class, 'CustomerID', 'id');
    }

	public function customerShipping(): HasOne
	{
		return $this->hasOne(CustomerShipping::class, 'CustomerID', 'id');
	}
}
