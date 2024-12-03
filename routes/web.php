<?php

use App\Http\Controllers\anggotaController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\usersController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



Route::group(['middleware' => ['auth','role:admin']], function(){
    Route::resource('books', BookController::class);
    Route::resource('users', usersController::class);
    // Tambahkan route untuk memperpanjang masa pinjam dan mengembalikan buku
    Route::post('books/{id}/extend', [BookController::class, 'extendBorrowPeriod'])->name('books.extend');
    Route::get('/books/borrowed', [BookController::class, 'getBorrowedBooks'])->name('books.borrowed');
    Route::post('/books/return/{id}', [BookController::class, 'returnBook'])->name('books.return');

});




Route::group(['middleware' => ['auth', 'role:anggota' ]], function(){
    Route::resource('anggota', anggotaController::class);
    Route::post('/anggota/return/{book_id}', [anggotaController::class, 'returnBook'])->name('anggota.return');
    Route::get('anggota/riwayat', [anggotaController::class, 'riwayat'])->name('anggota.riwayat');


});

