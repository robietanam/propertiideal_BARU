<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertiKos extends Model
{
    use HasFactory;

    protected $table = 'properti_kos';

    protected $primaryKey = 'id_properti_kos';

    protected $fillable = [
        'slug',
        'luas_kamar',
        'jenis_kamar_mandi',
        'properti_id',
    ];
}
