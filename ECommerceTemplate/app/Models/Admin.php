<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = [
        'AdminName',
        'AdminPassword',
    ];

    protected $hidden = [
        'AdminPassword',
    ];

    protected function adminPassword(): attribute
    {
        return Attribute::make(
            get: fn (string $value) => decrypt($value),
            set : fn (string $value) => encrypt($value)
        );
    }
}
