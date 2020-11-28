<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuType extends Model
{
    use HasFactory;

    protected $primary_key = 'menu_type_id';

    protected $fillable = [
        'menu_type_name',
    ];
}
