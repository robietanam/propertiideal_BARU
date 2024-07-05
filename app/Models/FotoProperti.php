<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoProperti extends Model
{
    use HasFactory;

    protected $table = 'foto_properti';

    protected $fillable = [
        'deskripsi_foto',
        'jenis_foto_id',
        'properti_id',
    ];
}
