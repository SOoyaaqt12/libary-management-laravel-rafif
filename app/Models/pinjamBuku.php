<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class pinjamBuku extends Model
{
    protected $fillable = [
        'user_id',
        'book_id',
        'tanggal_pinjam',
        'tanggal_kembali',
        'status',
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function book() {
        return $this->belongsTo(Book::class, 'book_id');
    }

    // Menambahkan accessor untuk sisa waktu
    protected $appends = ['sisa_waktu'];

    public function getSisaWaktuAttribute()
    {
        // Pastikan tanggal_kembali tidak null
        if ($this->tanggal_kembali) {
            $tanggal_kembali = Carbon::parse($this->tanggal_kembali);
            $today = Carbon::now();

            // Menghitung selisih hari
            $diffInDays = $today->diffInDays($tanggal_kembali, false); // False untuk bisa negatif jika terlambat
            return round($diffInDays); // Menggunakan round untuk pembulatan
        }

        return null; // Jika tanggal_kembali tidak ada
    }
}
