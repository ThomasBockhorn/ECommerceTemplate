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

    /**
     * @var string[]
     */
    protected $fillable = [
        'ProductID',
        'ProductSaleQuantity',
        'ProductSalePrice'
    ];

    /**
     * @var string[]
     */
    protected $casts = [
        'ProductSalePrice' => 'float'
    ];

    /**
     * @return Attribute
     */
    protected function productSalePrice(): Attribute
    {
        return Attribute::make(
            set: fn(float $value) => number_format($value, 2, '.', ',')
        );
    }
}
