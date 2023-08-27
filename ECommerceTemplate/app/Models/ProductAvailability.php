<?php

namespace App\Models;

use App\Enums\ProductStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int|mixed    $ProductID
* @property mixed|string $ProductAvailabilityDate
 * @property mixed|string $ProductStatus
 */
class ProductAvailability extends Model
{
    use HasFactory;

    protected $fillable = [
        'ProductID',
        'ProductAvailabilityDate',
        'ProductStatus',
    ];

    protected $casts = [
        'ProductStatus' => ProductStatusEnum::class
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'ProductID', 'id');
    }
}
