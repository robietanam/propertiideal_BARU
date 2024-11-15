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
     /**
     * Get the kategori properti that owns the properti.
     */
    public function kategoriProperti()
    {
        return $this->belongsTo(KategoriProperti::class, 'kategori_properti_id', 'id_kategori_properti');
    }

    /**
     * Get the kategori penjualan that owns the properti.
     */
    public function kategoriPenjualan()
    {
        return $this->belongsTo(KategoriPenjualan::class, 'kategori_penjualan_id');
    }

    public function properti_apartement() : HasMany {
        return $this->hasMany(PropertiApartement::class, 'properti_id', 'id_properti');
    }

    public function properti_ruko() : HasMany {
        return $this->hasMany(PropertiRuko::class, 'properti_id', 'id_properti');
    }

    public function properti_kos() : HasMany {
        return $this->hasMany(PropertiKos::class, 'properti_id', 'id_properti');
    }

    public function properti_rumah() : HasMany {
        return $this->hasMany(PropertiRumah::class, 'properti_id', 'id_properti');
    }

    public function properti_tanah() : HasMany {
        return $this->hasMany(PropertiTanah::class, 'properti_id', 'id_properti');
    }

    public function foto_properti() : hasMany {
        return $this->hasMany(FotoProperti::class, 'properti_id', 'id_properti');
    }

    public function foto_solution() : hasMany {
        return $this->hasMany(FotoSolution::class, 'properti_id', 'id_properti');
    }

    public function partner() : hasMany {
        return $this->hasMany(Partner::class, 'id_partner', 'partner_id');
    }
}
