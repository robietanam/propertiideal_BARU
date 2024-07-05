<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertiRuko extends Model
{
    use HasFactory;

    protected $table = 'properti_ruko';

    protected $fillable = [
        'slug',
        'luas_tanah',
        'properti_id',
    ];
}
