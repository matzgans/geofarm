<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{User, Lahan};

class Petani extends Model
{
    use HasFactory;

    protected $table = 'petanis';
    protected $fillable = [
        'nama',
        'nik',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
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
}
