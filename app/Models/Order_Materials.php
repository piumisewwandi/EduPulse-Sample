<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Materials extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'premium__educational__materials_id',
        'Price',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function Premium_Educational_Materials()
    {
        return $this->belongsTo(Premium_Educational_Materials::class);
    }
}
