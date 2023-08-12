<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\HasMany;

class ProductSalesJoinInvoice extends Model
{
    use HasFactory;

    public function productsales(): HasMany
    {
        return $this->hasMany(ProductSale::class, 'ProductSaleID', 'id');
    }
}
