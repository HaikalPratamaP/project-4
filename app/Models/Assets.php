<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assets extends Model
{
    protected $fillable = [
        'no_asset',
        'nama_barang',
        'id_kategori',
        'no_serial',
        'merk',
        'model',
        'status',
        'id_location',
        'updated_by',
    ];

    protected $primaryKey = 'id';

    public function Kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id');
    }
    
    public function Assets()
    {
        return $this->hasMany(Assets::class, 'id_assets', 'id');
    }

    public function Locations()
    {
        return $this->belongsTo(Locations::class, 'id_location', 'id');
    }
}
