<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'nik',
        'nama',
        'id_position',
        'id_location',
        'updated_by',
    ];

    protected $primaryKey = 'id';



    public function Client()
    {
        return $this->hasMany(Client::class, 'id_client', 'id');
    }

    public function Locations()
    {
        return $this->belongsTo(Locations::class, 'id_location', 'id');
    }

    public function Positions()
    {
        return $this->belongsTo(Positions::class, 'id_position', 'id');
    }
}
