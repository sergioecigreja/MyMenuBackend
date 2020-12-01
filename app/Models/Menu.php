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

    public function menuType() 
    {
        return $this->hasOne('App\Models\MenuType', 'menu_type_id', 'menu_type_id');
    }

    public function restaurant()
    {
        return $this->belongsTo('App\Models\Restaurant', 'restaurant_id');
    }

    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }
}
