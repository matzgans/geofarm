<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Lahan;
use Illuminate\Support\Carbon;

class Detail_lahan extends Model
{
    use HasFactory;
    Protected $table = 'detail_lahans';
    Protected $fillable = [
        'nama',
        'lahan_id',
        'tanggal_panen',
        'tanggal_penanaman',
        'foto_lahan',
    ];

    public function lahan()
    {
        return $this->belongsTo(Lahan::class);
    }

    public function ubahtanggal()
    {
        return Carbon::parse($this->attributes['tanggal_panen'])
            ->translatedFormat('l, d F Y');
    }
    public function ubahtanggal1()
    {
        return Carbon::parse($this->attributes['tanggal_penanaman'])
            ->translatedFormat('l, d F Y');
    }
}
