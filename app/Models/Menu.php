<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'menu_type_id',
        'restaurant_id'
    ];

    public function getKeyName()
    {
        return 'menu_id';
    }

    public function getRouteKeyName()
    {
        return 'menu_id';
    }
}
