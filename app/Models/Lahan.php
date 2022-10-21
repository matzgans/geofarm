<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Petani, Detail_lahan, Reponse};

class Lahan extends Model
{
    use HasFactory;

    protected $table = 'lahans';
    Protected $fillable = [
        'luas',
        'petani_id',
        'status_pengairan',
        'lat',
        'long',
    ];

    public function petani()
    {
        return $this->belongsTo(Petani::class);
    }

    public function detail_lahans()
    {
        return $this->hasMany(Detail_lahan::class);
    }

    public function responses()
    {
        return $this->hasMany(Reponse::class);
    }
}
