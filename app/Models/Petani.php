<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{User, Lahan, Poktan};

class Petani extends Model
{
    use HasFactory;

    protected $table = 'petanis';
    protected $fillable = [
        'nama_kelompok',
        'desa',
        'user_id',
        'foto'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function lahans()
    {
        return $this->hasMany(Lahan::class);
    }

    public function poktan()
    {
        return $this->hasMany(Poktan::class);
    }
}
