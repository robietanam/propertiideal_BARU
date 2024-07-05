<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriPenjualan extends Model
{
    use HasFactory;

    protected $table = 'kategori_penjualan';

    protected $fillable = [
        'nama_kategori',
        'deskripsi_kategori',
        'slug'
    ];
}
