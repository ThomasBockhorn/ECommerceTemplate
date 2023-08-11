<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int|mixed $ProductID
 * @property mixed|string $ProductImageName
 * @property mixed|string $ProductImageDescription
 * @property mixed|string $ProductImageURL
 */
class ProductImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'ProductID',
        'ProductImageName',
        'ProductImageDescription',
        'ProductImageURL',
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'ProductID', 'id');
    }
}
