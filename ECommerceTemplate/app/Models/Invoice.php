<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int|mixed $CustomerID
 * @property mixed|string $InvoiceDate
 * @property float|mixed $InvoiceTotal
 * @property int|mixed $InvoiceNumber
 */
class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'InvoiceNumber',
        'InvoiceDate',
        'InvoiceTotal',
        'CustomerID',
    ];


}
