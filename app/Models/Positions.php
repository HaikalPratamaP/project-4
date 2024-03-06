<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Positions extends Model
{
    protected $fillable = [
        'nama_jabatan',
        'updated_by',
    ];

    protected $primaryKey ='id';

    public function Positions()
    {
        return $this->hasMany(Positions::class, 'id_position', 'id');
    }
}
