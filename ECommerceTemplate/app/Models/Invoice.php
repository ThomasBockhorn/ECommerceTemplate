<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'CustomerID', 'id');
    }
}
