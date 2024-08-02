<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;

    protected $table = 'partner';

    protected $primaryKey = 'id_partner';

    protected $fillable = [
        'no_telepon',
        'detail_alamat',
        'link_instagram',
        'link_website',
        'foto_ktp',
        'user_id',
        'status',
        'verified_at',
    ];
}
