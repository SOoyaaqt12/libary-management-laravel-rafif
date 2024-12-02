<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

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
        return view('books.create');
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
            'jumlah_stok' => 'required',
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
            'tahun_terbit' => 'required|max:4',
            'jumlah_stok' => 'required',
            'ketagori' => 'required',
            'deskripsi' => 'required|max:1000',
        ]);

        $books = Book::findOrFail($id);
        $books->update([
            'judul_buku' => $request->judul_buku,
            'penulis' => $request->penulis,
            'tahun_terbit' => $request->tahun_terbit,
            'jumlah_stok' => $request->jumlah_stok,
            'ketagori' => $request->ketagori,
            'deskripsi' => $request->deskripsi,
        ]);

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
}
