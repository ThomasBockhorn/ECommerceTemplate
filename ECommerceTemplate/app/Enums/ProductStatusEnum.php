<?php

namespace App\Enums;

enum ProductStatusEnum: string
{
    case Available = 'Available';
    case Unavailable = 'Unavailable';
    case Discontinued = 'Discontinued';
    case Backorder = 'Backorder';
    case Preorder = 'Preorder';
    case SoldOut = 'SoldOut';
    case OnSale = 'OnSale';
}
