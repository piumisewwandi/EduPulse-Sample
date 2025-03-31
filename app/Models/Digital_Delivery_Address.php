<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Digital_Delivery_Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'First_Name',
        'Last_Name',
        'Email',
        'Phone_Number',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function getFullNameAttribute()
    {
        return "{$this->First_Name} {$this->Last_Name}";
    }
}


