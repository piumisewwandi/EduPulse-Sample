<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'Final_Total',
        'Price',
        'Payment_Method',
        'Payment_Status',
        'Status',
        'Currency',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

   public function Order_Materials(){
        return $this->hasMany(Order_Materials::class);
   }

   public function Digital_Delivery_Address(){
        return $this->hasOne(Digital_Delivery_Address::class);
   }
}
