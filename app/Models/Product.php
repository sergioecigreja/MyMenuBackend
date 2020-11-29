<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'product_price',
        'product_description'
    ];

    public function getKeyName()
    {
        return 'product_id';
    }

    public function getRouteKeyName()
    {
        return 'product_id';
    }
}
