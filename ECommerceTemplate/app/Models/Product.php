<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed|string $ProductName
 * @property mixed|string $ProductDescription
 */
class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'ProductName',
        'ProductDescription',
    ];
}
