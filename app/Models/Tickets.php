<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{
    protected $fillable = [
        'no_tiket',
        'kendala',
        'detail_kendala',
        'id_assets',
        'id_user',
        'id_client',
        'status',
        'priority',
        'penilaian',
        'jam_kerja',
        'estimated',
        'foto',
        'updated_by',
    ];

    protected $primaryKey = 'id';

    public function Client()
    {
        return $this->belongsTo(Client::class, 'id_client', 'id');
    }

    public function User()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function Assets()
    {
        return $this->belongsTo(Assets::class, 'id_assets', 'id');
    }
}
