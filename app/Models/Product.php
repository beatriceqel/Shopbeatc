<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'nama',
        'description',
        'price',
        'stock',
        'image',
    ];
    
}
