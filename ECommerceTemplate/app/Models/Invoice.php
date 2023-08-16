<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int|mixed $CustomerID
 * @property mixed|string $InvoiceDate
 * @property float|mixed $InvoiceTotal
 * @property int|mixed $InvoiceNumber
 */
class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'InvoiceNumber',
        'InvoiceDate',
        'InvoiceTotal',
        'CustomerID',
    ];

	protected $casts = [
	  'InvoiceTotal' => 'float',
	  'InvoiceNumber' => 'int',
	];

	protected function invoiceTotal(): Attribute
	{
		return Attribute::make(
		  set: fn (float $value) => number_format($value, 2, '.', ',')
		);
	}

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'CustomerID', 'id');
    }

	public function productSalesJoinInvoices(): BelongsToMany
	{
		return $this->belongsToMany(ProductSalesJoinInvoice::class, 'InvoiceID', 'id');
	}
}
