<x-app-layout>
    <div class="lg:pl-64 pt-10 items-center">
        <p class=" text-6xl ms-8 text-gray-900 font-medium dark:text-white">Anggota</p>

    @csrf
    <div class="grid grid-cols-3 gap-20 items-center mt-10">
    @foreach ($books as $book)
    {{-- <div class="flex flex-row justify-between lg:pl-64">
        <div class="bg-white p-8 rounded-lg">
            <h1>buku</h1>
        </div>
    </div> --}}

        <div class="">
            <div class=" rounded-2xl px-8 mx-10 bg-white dark:bg-gray-800 shadow-xl transition duration-300 hover:shadow-black hover:shadow-2xl hover:scale-110">
                <div class="flex flex-col p-4">
                    <div class="text-xl font-bold dark:text-gray-50 text-[#374151] pb-6">{{ $book->judul_buku }}</div>
                    <div class=" text-base dark:text-gray-50 text-[#374151]">{{ $book->penulis }}</div>
                    <div class=" text-base   text-[#aeb0b3]">{{ $book->status == 1 ? 'tersedia' : 'tidak tersedia' }}
                    </div>
                    <div class="flex justify-end pt-6">
                        {{-- Cek status buku, jika tersedia, tampilkan tombol pinjam --}}
                        @if ($book->status == 1)
                            <button data-modal-target="modal-{{ $book->id }}" data-modal-toggle="modal-{{ $book->id }}" type="button" class="bg-[#2960c8] text-[#ffffff] font-bold text-sm p-3 rounded-lg transition duration-300 hover:bg-purple-800 active:scale-95 transform">
                                Pinjam Buku
                            </button>
                        @else
                            <button type="button" class="bg-gray-400 text-[#ffffff] font-bold text-sm p-3 rounded-lg cursor-not-allowed" disabled>
                                Buku Tidak Tersedia
                            </button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div id="modal-{{ $book->id }}" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                            Isi terlebih dahulu form peminjaman buku
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent transition duration-300 hover:scale-110 hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="modal-{{ $book->id }}">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <form class="p-4 md:p-5" action="{{ route('anggota.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="book_id" value="{{ $book->id }}">
                        <div class="grid gap-4 mb-4 grid-cols-2">
                            <div class="sm:col-span-2">
                                <label for="name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                    Anggota</label>
                                <input type="text" name="name" id="name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white transition duration-300 hover:scale-105 hover:shadow-black hover:shadow-2xl dark:focus:ring-primary-500 dark:focus:border-primary-500 focus:scale-100 focus:shadow-none focus:bg-gray-50 dark:hover:bg-gray-950 focus:dark:bg-gray-700"
                                    value="{{ auth()->user()->name }}" readonly>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="judul_buku"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul
                                    Buku</label>
                                <input type="text" value="{{ $book->judul_buku }}" name="judul_buku" id="judul_buku"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 transition duration-300 dark:hover:bg-gray-950 hover:scale-105 hover:shadow-black hover:shadow-2xl dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 focus:scale-100 focus:shadow-none focus:bg-gray-50 focus:dark:bg-gray-700"
                                    readonly>
                            </div>
                            <div class="w-full">
                                <label for="penulis"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penulis</label>
                                <input type="text" name="penulis" value="{{ $book->penulis }}" id="penulis"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 transition duration-300 dark:hover:bg-gray-950 hover:scale-105 hover:shadow-black hover:shadow-2xl dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 focus:scale-100 focus:shadow-none focus:bg-gray-50 focus:dark:bg-gray-700"
                                    readonly>
                            </div>
                            <div class="w-full">
                                <label for="tanggal_pinjam"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                                    Pinjam</label>
                                <input type="date" name="tanggal_pinjam"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 transition duration-300 dark:hover:bg-gray-950 hover:scale-105 hover:shadow-black hover:shadow-2xl dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 focus:scale-100 focus:shadow-none focus:bg-gray-50 focus:dark:bg-gray-700"
                                    required>
                            </div>
                            <div class="w-full">
                                <label for="tanggal_kembali"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                                    Kembali</label>
                                <input type="date" name="tanggal_kembali"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 transition duration-300 dark:hover:bg-gray-950 hover:scale-105 hover:shadow-black hover:shadow-2xl dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 focus:scale-100 focus:shadow-none focus:bg-gray-50 focus:dark:bg-gray-700"
                                    required>
                            </div>
                        </div>
                        <button type="submit"
                            class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg transition duration-300 hover:scale-105 dark:hover:bg-gray-950 hover:shadow-black hover:shadow-2xl focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                            Pinjam Buku
                        </button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>
</div>
</x-app-layout>
