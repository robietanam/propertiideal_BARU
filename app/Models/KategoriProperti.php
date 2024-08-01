<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriProperti extends Model
{
    use HasFactory;

    protected $table = 'kategori_properti';

    protected $primaryKey = 'id_kategori_properti';

    protected $fillable = [
        'nama_kategori',
        'deskripsi_kategori',
        'slug',
    ];
}
