<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductSalesJoinInvoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'ProductSaleID',
        'InvoiceID',
    ];

    public function productSales(): BelongsToMany
    {
        return $this->belongsToMany(ProductSale::class, 'ProductSaleID', 'id');
    }

    public function invoices(): BelongsToMany
    {
        return $this->belongsToMany(Invoice::class, 'InvoiceID', 'id');
    }
}
