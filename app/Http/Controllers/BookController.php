<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Book;
use App\Models\pinjamBuku;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();

        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Ambil buku yang sedang dipinjam
        $borrowedBooks = pinjamBuku::with('book')
            ->where('status', 'borrowed')
            ->get();

        return view('books.create', compact('borrowedBooks'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul_buku' => 'required',
            'penulis' => 'required',
            'ketagori' => 'required',
            'tahun_terbit' => 'required',
            'status' => 'required',
            'deskripsi' => 'required',
        ]);

        Book::create($request->all());

        return redirect('books');
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
        $books = Book::findOrFail($id);
        return view('books.edit', compact('books'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'judul_buku' => 'required|max:255',
            'penulis' => 'required|max:100',
            'tahun_terbit' => 'required|integer|max:4',
            'ketagori' => 'required',
            'deskripsi' => 'required|max:1000',
            'status' => 'required|boolean',
        ]);

        Book::create($request->all());
        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // cari data sesuai id
        $books = Book::findorFail($id);

        // hapus data
        $books->delete();


        // redirect atau kembali response
        return redirect()->route('books.index')->with(['success'=>'Data Berhasil DIhapus']);
    }

    public function getBorrowedBooks()
    {
        // Ambil data buku yang dipinjam
        $borrowedBooks = pinjamBuku::with('book') // Include hubungan ke model Book
            ->where('status', 'borrowed') // Hanya buku yang dipinjam
            ->get();

        return view('books.create', compact('borrowedBooks'));
    }

    public function extendBorrowPeriod(Request $request, $id)
    {
        $borrowedBook = pinjamBuku::findOrFail($id);

        // Tambah 7 hari ke tanggal pengembalian
        $borrowedBook->update([
            'tanggal_kembali' => Carbon::parse($borrowedBook->tanggal_kembali)->addDays(7)
        ]);

        return redirect()->route('books.borrowed')->with('success', 'Masa pinjaman berhasil diperpanjang.');
    }

    public function returnBook($id)
    {
        $borrowedBook = pinjamBuku::findOrFail($id);

        // Update status menjadi returned
        $borrowedBook->update([
            'status' => 'returned'
        ]);

        // Update status buku menjadi tersedia
        $borrowedBook->book->update(['status' => true]);

        return redirect()->route('books.borrowed')->with('success', 'Buku berhasil dikembalikan.');
    }

}


