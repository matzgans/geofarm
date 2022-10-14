<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Lahan;

class Detail_lahan extends Model
{
    use HasFactory;
    Protected $table = 'detail_lahans';
    Protected $fillable = [
        'nama',
        'lahan_id',
        'foto_lahan',
    ];

    public function lahan()
    {
        return $this->belongsTo(Lahan::class);
    }
}
