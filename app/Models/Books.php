<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    protected $fillable = 
    [
    'id',
    'judul',
    'penerbit',
    'penulis',
    'tahun_terbit',
    'jenis_buku',
    'stok'
    ];
    public $timestamps = true;
}
