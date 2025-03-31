<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['Category_Name','Image', 'is_active'];

    

    public function Premium_Educational_Materials()
    {
        return $this->hasMany(Premium_Educational_Materials::class);
    }
}
