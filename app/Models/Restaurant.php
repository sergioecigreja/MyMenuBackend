<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'restaurant_name',
        'restaurant_description'
    ];

    public function getKeyName()
    {
        return 'restaurant_id';
    }

    public function getRouteKeyName()
    {
        return 'restaurant_id';
    }
}
