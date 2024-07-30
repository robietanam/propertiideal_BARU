<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertiApartement extends Model
{
    use HasFactory;

    protected $table = 'properti_apartement';

    protected $primaryKey = 'id_properti_apartement';

    protected $fillable = [
        'slug',
        'luas_apartement',
        'jumlah_kamar_tidur',
        'jumlah_kamar_mandi',
        'properti_id',
    ];
}
