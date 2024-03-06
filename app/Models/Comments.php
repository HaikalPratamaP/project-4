<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{

    protected $fillable = [
        'id_user',
        'id_detail_ticket',
        'komentar',
        'updated_by',
    ];

    protected $primaryKey = 'id';


    public function User()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function Detail_tiket()
    {
        return $this->belongsTo(Detail_tiket::class, 'id_detail_ticket', 'id');
    }
}
