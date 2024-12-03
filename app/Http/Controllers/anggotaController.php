<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Book;
use App\Models\pinjamBuku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Validated;

class anggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $books = Book::all();


    return view('anggota.index', compact('books'));

}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Ambil data riwayat peminjaman untuk user yang sedang login
        $riwayatPinjaman = pinjamBuku::with('book') // Ambil relasi ke tabel buku
            ->where('user_id', Auth::id()) // Hanya data milik user login
            ->orderBy('tanggal_pinjam', 'desc') // Urutkan berdasarkan tanggal pinjam
            ->get();

        return view('anggota.create', compact('riwayatPinjaman'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'book_id' => 'required|exists:books,id',
            'tanggal_pinjam' => 'required|date',
            'tanggal_kembali' => 'required|date|after_or_equal:tanggal_pinjam',
        ]);

        $books = Book::findorFail($request->book_id);
        if (!$books->status) {
            return back();
        }

        pinjamBuku::create([
            'user_id' => Auth::id(),
            'book_id' => $books->id,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'tanggal_kembali' => $request->tanggal_kembali,
            'status' => 'borrowed',
        ]);

        $books->update([
            'status' => false,
            'loan_status' => 'borrowed',
        ]);

        return redirect()->route('anggota.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function returnBook($pinjam_id)
{
    // Temukan peminjaman buku berdasarkan ID
    $pinjam = PinjamBuku::find($pinjam_id);

    // Pastikan buku ditemukan dan statusnya "borrowed"
    if ($pinjam && $pinjam->status === 'borrowed') {
        // Update status peminjaman menjadi "returned"
        $pinjam->update([
            'status' => 'returned',
            'tanggal_kembali' => now(),
        ]);

        // Update status buku di tabel buku
        $pinjam->book->update([
            'status' => true, // Buku sudah tersedia
        ]);

        return redirect()->back()->with('success', 'Buku berhasil dikembalikan.');
    }

    return redirect()->back()->with('error', 'Buku tidak ditemukan atau sudah dikembalikan.');
}

public function riwayat()
{
    $riwayatPinjaman = pinjamBuku::with('book') // Mengambil relasi ke tabel buku
        ->where('user_id', Auth::id()) // Hanya data untuk user yang sedang login
        ->orderBy('tanggal_pinjam', 'desc') // Urutkan berdasarkan tanggal pinjam
        ->get();

    return view('anggota.riwayat', compact('riwayatPinjaman'));
}


}
