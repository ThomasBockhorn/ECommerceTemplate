<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
        //This is a custom cast that will not allow negative numbers to be entered into the database
        return Attribute::make(
            set: fn ($value) => max($value, 0),

        );
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'ProductID', 'id');
    }
}
