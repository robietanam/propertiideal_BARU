<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisFoto extends Model
{
    use HasFactory;

    protected $table = 'jenis_foto';

    protected $fillable = [
        'jenis_foto',
    ];
}
