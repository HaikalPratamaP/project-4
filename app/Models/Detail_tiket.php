<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_tiket extends Model
{
    protected $fillable = [
        'id_kategori_ticket',
        'processed_by',
        'role',
        'process_at',
        'pending_at',
        'pending_time',
        'solved_time',
        'note',
        'updated_by',
    ];

    protected $primaryKey = 'id';

    public function Detail_tiket()
    {
        return $this->hasMany(Detail_tiket::class, 'id_detail_ticket', 'id');
    }
    
    public function Kategori_tiket()
    {
        return $this->belongsTo(Kategori_tiket::class, 'id_kategori_ticket', 'id');
    }
}
