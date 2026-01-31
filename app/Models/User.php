<?php

namespace App\Models;

use App\Traits\HasRolesAndPermissions;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRolesAndPermissions;

    
    protected $fillable = [
        'full_name', 
        'phone',
        'username', 
        'password',
    ];

    
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function ads()
    {
        return $this->hasMany(Ad::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }
}
