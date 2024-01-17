<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'description',
        'product_type',
        'product_id',
        'color',
        'price',
        'stock',
        'image',
    ];

    public function getPriceAttribute($value)
    {
        // Format the price with "Rp." and convert it to a textual representation in millions
        return 'Rp. ' . number_format($value / 1000000, 2) . '0.000';
    }
}