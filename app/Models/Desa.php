<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    use HasFactory;

    Protected $table = 'desas';

    Protected $fillable = [
        'nama_desa',
    ];
}
