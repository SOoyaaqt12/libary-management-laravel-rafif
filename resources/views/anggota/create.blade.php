<x-app-layout>
    <div class="lg:pl-64 mx-14 py-24">

        <!-- Bagian Riwayat Peminjaman -->
        <div class="mt-10">
            <h2 class="text-xl dark:text-gray-50 font-bold mb-4">Riwayat Peminjaman Buku</h2>

            @if ($riwayatPinjaman->isEmpty())
                <p class="text-gray-500">Belum ada riwayat peminjaman buku.</p>
            @else
                <table class="min-w-full dark:bg-gray-800 bg-white dark:border-none border rounded-2xl shadow-md">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 dark:text-gray-50 text-left text-sm font-medium text-gray-700">ID</th>
                            <th class="px-4 py-2 dark:text-gray-50 text-left text-sm font-medium text-gray-700">Judul Buku</th>
                            <th class="px-4 py-2 dark:text-gray-50 text-left text-sm font-medium text-gray-700">Tanggal Pinjam</th>
                            <th class="px-4 py-2 dark:text-gray-50 text-left text-sm font-medium text-gray-700">Tanggal Kembali</th>
                            <th class="px-4 py-2 dark:text-gray-50 text-left text-sm font-medium text-gray-700">Pengingat Hari</th>
                            <th class="px-4 py-2 dark:text-gray-50 text-left text-sm font-medium text-gray-700">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($riwayatPinjaman as $pinjam)
                            <tr>
                                <td class="px-4 py-2 text-sm dark:text-gray-50 text-gray-900">{{ $loop->iteration }}</td>
                                <td class="px-4 py-2 text-sm dark:text-gray-50 text-gray-900">{{ $pinjam->book->judul_buku ?? 'Buku tidak ditemukan' }}</td>
                                <td class="px-4 py-2 text-sm dark:text-gray-50 text-gray-900">{{ $pinjam->tanggal_pinjam }}</td>
                                <td class="px-4 py-2 text-sm dark:text-gray-50 text-gray-900">{{ $pinjam->tanggal_kembali }}</td>
                                <td class="px-4 py-2 text-sm dark:text-gray-50 text-gray-900">
                                    @php
                                        // Hitung selisih hari dari tanggal kembali
                                        $hariPengembalian = \Carbon\Carbon::now()->diffInDays(\Carbon\Carbon::parse($pinjam->tanggal_kembali), false);

                                        // Menggunakan round untuk pembulatan angka desimal
                                        if ($hariPengembalian > 0) {
                                            $pengingat = round($hariPengembalian) . ' hari lagi';
                                        } elseif ($hariPengembalian == 0) {
                                            $pengingat = 'Hari ini';
                                        } else {
                                            // Jika sudah terlambat
                                            $pengingat = 'Terlambat ' . abs(round($hariPengembalian)) . ' hari';
                                        }
                                    @endphp
                                    {{ $pengingat }}
                                </td>
                                <td class="px-4 py-2 text-sm text-gray-900">
                                    @if ($pinjam->status === 'borrowed')
                                        <span class="text-yellow-500">Dipinjam</span>
                                    @elseif ($pinjam->status === 'returned')
                                        <span class="text-green-500">Dikembalikan</span>
                                    @else
                                        <span class="text-red-500">Tidak Diketahui</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</x-app-layout>
