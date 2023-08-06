<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int|mixed   $ProductID
 * @property int|mixed   $ProductSaleQuantity
 * @property float|mixed $ProductSalePrice
 */
class ProductSale extends Model
{
    use HasFactory;

    protected $fillable = [
        'ProductID',
        'ProductSaleQuantity',
        'ProductSalePrice'
    ];
}
