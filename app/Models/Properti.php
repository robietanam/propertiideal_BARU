<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Properti extends Model
{
    use HasFactory;

    protected $table = 'properti';

    protected $primaryKey = 'id_properti';

    protected $fillable = [
        'nama_properti',
        'slug',
        'alamat',
        'deskripsi',
        'harga',
        'latitude',
        'longitude',
        'prioritas',
        'status',
        'kategori_properti_id',
        'kategori_penjualan_id',
        'partner_id',
    ];

    public function properti_apartement() : HasMany {
        return $this->hasMany(PropertiApartement::class, 'properti_id', 'id_properti');
    }

    public function foto_properti() : hasMany {
        return $this->hasMany(FotoProperti::class, 'properti_id', 'id_properti');
    }

    public function foto_solution() : hasMany {
        return $this->hasMany(FotoSolution::class, 'properti_id', 'id_properti');
    }
}
