<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
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
        'ProductSalePrice',
    ];

    protected $casts = [
        'ProductSalePrice' => 'float',
        'ProductSaleQuantity' => 'int',
    ];

    protected function productSalePrice(): Attribute
    {
        return Attribute::make(
            set: fn (float $value) => number_format($value, 2, '.', ','),
        );
    }

    protected function productSaleQuantity(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => max($value, 0),

        );
    }
}
