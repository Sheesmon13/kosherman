<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class price extends Model
{
    use HasFactory;
    protected $fillable = [
        'pricehead',
        'priceplan',
        'pricesub',
    ];
}
