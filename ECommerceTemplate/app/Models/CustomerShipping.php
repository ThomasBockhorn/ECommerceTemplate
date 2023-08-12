<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerShipping extends Model
{
    use HasFactory;

    protected $fillable = [
        'CustomerShippingName',
        'CustomerShippingAddress',
        'CustomerShippingCity',
        'CustomerShippingState',
        'CustomerShippingZip',
        'CustomerShippingPhone',
        'CustomerShippingEmail',
        'CustomerShippingDefault',
        'CustomerID',
    ];
}
