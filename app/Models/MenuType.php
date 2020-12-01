<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuType extends Model
{
    use HasFactory;

    protected $fillable = [
        'menu_type_name',
    ];

    public function getKeyName()
    {
        return 'menu_type_id';
    }

    public function getRouteKeyName()
    {
        return 'menu_type_id';
    }

}
