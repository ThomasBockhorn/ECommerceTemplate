<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed|string $ProductName
 * @property mixed|string $ProductDescription
 * @property int|mixed    $ProductCost
 */
class Product extends Model
{
    use HasFactory;


    protected $fillable = [
        'ProductName',
        'ProductDescription',
        'ProductCost'
    ];


    protected $casts = [
        'ProductCost' => 'float'
    ];


    /**
     * @return Attribute
     */
    protected function productCost(): Attribute
    {
        return Attribute::make(
            set: fn(float $value) => number_format($value, 2, '.', ',')
        );
    }
}
