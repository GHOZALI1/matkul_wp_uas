<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'penulis', 'penerbit', 'tahun_terbit', 'jumlah_halaman', 'sinopsis', 'status'];

}
