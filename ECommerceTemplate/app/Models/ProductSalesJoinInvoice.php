<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\HasMany;

class ProductSalesJoinInvoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'ProductSaleID',
        'InvoiceID',
    ];

    public function productSales(): HasMany
    {
        return $this->hasMany(ProductSale::class, 'ProductSaleID', 'id');
    }

    public function invoice(): HasMany
    {
        return $this->hasMany(Invoice::class, 'InvoiceID', 'id');
    }
}
