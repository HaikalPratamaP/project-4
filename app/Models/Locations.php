<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locations extends Model
{
    protected $fillable = [
        'nama_lokasi',
        'wilayah',
        'regional',
        'updated_by',
    ];

    protected $primaryKey ='id';

    
    public function Locations()
    {
        return $this->hasMany(Locations::class, 'id_location', 'id');
    }
}
