<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'product_id',
        'name',
        'username',
        'address',
        'payment_method',
        'amount',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}