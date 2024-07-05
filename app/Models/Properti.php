<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Properti extends Model
{
    use HasFactory;

    protected $table = 'properti';

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
    ];
}
