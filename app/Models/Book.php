<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'judul_buku',
        'penulis',
        'ketagori',
        'tahun_terbit',
        'jumlah_stok',
        'status',
        'deskripsi',
        'loan_status',
    ];

    public function loans() {
        return $this->hasMany(pinjamBuku::class, 'book_id');
    }
}
