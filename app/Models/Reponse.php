<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Lahan;

class Reponse extends Model
{
    use HasFactory;
    Protected $table = 'reponses';

    Protected $fillable = [
        'nama',
        'email',
        'response',
        'lahan_id',
    ];
    
    
    public function lahan()
    {
        return $this->belongsTo(Lahan::class);
    }
}
