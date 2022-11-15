<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Desa, Petani};

class Poktan extends Model
{
    use HasFactory;

    Protected $table = 'poktans';

    Protected $fillable = [
        'nama_poktan',
        'desa_id',
        'petani_id'
    ];

    public function desa()
    {
        return $this->belongsTo(Desa::class);
    }

    public function petani()
    {
        return $this->belongsTo(Petani::class);
    }
}
