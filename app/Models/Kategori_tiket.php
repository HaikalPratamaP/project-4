<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori_tiket extends Model
{
    protected $fillable = [
        'nama_kategori',
        'nama_sub_kategori',
        'updated_by',
    ];

    protected $primaryKey ='id';

    
    public function Kategori_tiket()
    {
        return $this->hasMany(Kategori_tiket::class, 'id_kategori_ticket', 'id');
    }
}
