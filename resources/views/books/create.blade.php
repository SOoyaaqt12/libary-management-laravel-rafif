<x-app-layout>
    <div class="lg:pl-64">
        <h1 class="text-5xl dark:text-gray-50 text-gray-900 transition p-24 font-bold mb-4">Daftar Buku yang Dipinjam</h1>

        @if($borrowedBooks->isEmpty())
            <p class="dark:text-gray-50 px-24 text-gray-900 transition text-3xl">Tidak ada buku yang sedang dipinjam.</p>
        @else
            <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md">
                <thead>
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Judul Buku</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Penulis</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Tanggal Kembali</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Sisa Waktu</th>
                        <th class="px-6 py-3 text-center text-sm font-medium text-gray-700">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($borrowedBooks as $borrow)
                        <tr class="border-b">
                            <td class="px-6 py-4 text-sm text-gray-900">{{ $borrow->book->judul_buku }}</td>
                            <td class="px-6 py-4 text-sm text-gray-900">{{ $borrow->book->penulis }}</td>
                            <td class="px-6 py-4 text-sm text-gray-900">{{ $borrow->tanggal_kembali }}</td>
                            <td class="px-6 py-4 text-sm text-gray-900">
                                {{ $borrow->sisa_waktu > 0 ? $borrow->sisa_waktu . ' hari' : 'Terlambat ' . abs($borrow->sisa_waktu) . ' hari' }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                <form action="{{ route('books.return', $borrow->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-700">
                                        Kembalikan
                                    </button>
                                </form>
                                <form action="{{ route('books.extend', $borrow->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                                        Perpanjang
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</x-app-layout>
