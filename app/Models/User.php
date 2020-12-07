<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use UserTypes;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_name',
        'user_email',
        'user_password',
        'user_type_id'
    ];

    public function isRestaurantClient() {
        return $this->user_type_id == UserTypes::RestaurantClient;
    }

    public function isRestaurantOwner() {
        return $this->user_type_id == UserTypes::RestaurantOwner;
    }

    public function isAdmin() {
        return $this->user_type_id == UserTypes::Admin;
    }

    public function getKeyName()
    {
        return 'user_id';
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'user_password',
        'user_remember_token',
        'user_type_id'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'user_email_verified_at' => 'datetime',
    ];
}
