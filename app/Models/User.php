<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nik',
        'nama',
        'id_position',
        'id_location',
        'password',
        'role',
        'level',
        'foto',
        'updated_by',
    ];

    protected $primaryKey = 'id';


    public function User()
    {
        return $this->hasMany(User::class, 'id_user', 'id');
    }
    
    public function Locations()
    {
        return $this->belongsTo(Locations::class, 'id_location', 'id');
    }

    public function Positions()
    {
        return $this->belongsTo(Positions::class, 'id_position', 'id');
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
