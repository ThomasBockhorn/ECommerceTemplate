<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed|string $CustomerName
 * @property mixed|string $CustomerEmail
 * @property mixed|string $CustomerPhone
 * @property mixed|string $CustomerAddress
 * @property mixed|string $CustomerCity
 * @property mixed|string $CustomerState
 * @property mixed|string $CustomerZip
 */
class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'CustomerName',
        'CustomerEmail',
        'CustomerPhone',
        'CustomerAddress',
        'CustomerCity',
        'CustomerState',
        'CustomerZip',
    ];
}
