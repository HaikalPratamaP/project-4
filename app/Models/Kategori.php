<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $fillable = [
        'nama_kategori',
        'updated_by',
    ];

    protected $primaryKey ='id';

    public function Kategori()
    {
        return $this->hasMany(Kategori::class, 'id_kategori', 'id');
    }
}
