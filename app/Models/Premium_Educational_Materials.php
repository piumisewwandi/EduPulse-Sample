<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Premium_Educational_Materials extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'Name',
        'Description',
        'Image',
        'Price',
        'On_sale',
    ];

    protected $casts = [
        'Image' => 'array',
    ];

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }

    public function Digital_Delivery_Address()
    {
        return $this->hasOne(Digital_Delivery_Address::class);
    }

    public function Order_Materials()
    {
        return $this->hasMany(Order_Materials::class);
    }

}
