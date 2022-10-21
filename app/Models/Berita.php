<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    Protected $table = 'beritas';

    Protected $fillable = ['pegawai_id', 'judul', 'konten', 'thumbnail'];
}
