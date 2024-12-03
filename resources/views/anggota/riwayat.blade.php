<x-app-layout>
    <div class="container mx-auto mt-8">
        <h1 class="text-2xl font-bold mb-6">Riwayat Peminjaman Buku</h1>

        @if ($riwayatPinjaman->isEmpty())
            <p class="text-gray-500">Belum ada riwayat peminjaman buku.</p>
        @else
            <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md">
                <thead>
                    <tr>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">ID</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Book ID</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">User ID</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Tanggal Pinjam</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Tanggal Kembali</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Pengingat Hari</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Status Pinjam</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($riwayatPinjaman as $pinjam)
                        <tr class="border-b">
                            <td class="px-4 py-2 text-sm text-gray-900">{{ $pinjam->id }}</td>
                            <td class="px-4 py-2 text-sm text-gray-900">{{ $pinjam->book_id }}</td>
                            <td class="px-4 py-2 text-sm text-gray-900">{{ $pinjam->user_id }}</td>
                            <td class="px-4 py-2 text-sm text-gray-900">{{ $pinjam->tanggal_pinjam }}</td>
                            <td class="px-4 py-2 text-sm text-gray-900">{{ $pinjam->tanggal_kembali }}</td>
                            <td class="px-4 py-2 text-sm text-gray-900">
                                @php
                                    $hariPengembalian = \Carbon\Carbon::now()->diffInDays(\Carbon\Carbon::parse($pinjam->tanggal_kembali), false);
                                @endphp
                                @if ($hariPengembalian > 0)
                                    {{ $hariPengembalian }} hari lagi
                                @elseif ($hariPengembalian === 0)
                                    Hari ini
                                @else
                                    Terlambat {{ abs($hariPengembalian) }} hari
                                @endif
                            </td>
                            <td class="px-4 py-2 text-sm text-gray-900">
                                @if ($pinjam->status === 'borrowed')
                                    <span class="text-yellow-500">Dipinjam</span>
                                @elseif ($pinjam->status === 'returned')
                                    <span class="text-green-500">Dikembalikan</span>
                                @else
                                    <span class="text-red-500">Status Tidak Diketahui</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</x-app-layout>
