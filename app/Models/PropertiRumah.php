<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertiRumah extends Model
{
    use HasFactory;

    protected $table = 'properti_rumah';

    protected $primaryKey = 'id_properti_rumah';

    protected $fillable = [
        'slug',
        'luas_tanah',
        'luas_bangunan',
        'jumlah_garasi',
        'jumlah_kamar_tidur',
        'jumlah_kamar_mandi',
        'properti_id',
    ];
}
