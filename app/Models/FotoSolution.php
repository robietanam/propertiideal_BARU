<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoSolution extends Model
{
    use HasFactory;

    protected $table = 'foto_solution';

    protected $fillable = [
        'foto_solution',
        'deskripsi_foto',
        'jenis_foto_id',
        'properti_id',
    ];
}
