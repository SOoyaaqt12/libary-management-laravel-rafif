<x-app-layout>
    <div class="lg:pl-64 row items-center">
        <p class="ps-64 pt-44 text-6xl text-gray-900 font-medium dark:text-white">Anggota</p>
    </div>
    @foreach ( $books as $book )
    @csrf
    <div class="lg:pl-64 mt-14 flex flex-row justify-center">
        <div class="flex flex-col rounded-2xl w-80 bg-[#ffffff] shadow-xl">
            <div class="flex flex-col p-8">
                <div class="text-xl font-bold   text-[#374151] pb-6">{{ $book->judul_buku }}</div>
                <div class=" text-base   text-[#374151]">{{ $book->deskripsi }}</div>
                <div class=" text-base   text-[#374151]">{{ $book->status }}</div>
                <div class="flex justify-end pt-6">
                    <button data-modal-target="modal-{{ $book->id }}" data-modal-toggle="modal-{{ $book->id }}" type="button" class="bg-[#2960c8] text-[#ffffff]  font-bold text-sm  p-3 rounded-lg hover:bg-purple-800 active:scale-95 transition-transform transform">Pinjam Buku</button>
                </div>
                <!---->
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
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="modal-{{ $book->id }}">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form class="p-4 md:p-5" action="{{ route('anggota.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="book_id" value="{{ $book->id }}">
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="sm:col-span-2">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Anggota</label>
                            <input type="text" name="name" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                value="{{ auth()->user()->name }}" readonly>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="judul_buku" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul Buku</label>
                            <input type="text" value="{{ $book->judul_buku }}" name="judul_buku" id="judul_buku"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                readonly>
                        </div>
                        <div class="w-full">
                            <label for="penulis" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penulis</label>
                            <input type="text" name="penulis" value="{{ $book->penulis }}" id="penulis"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                readonly>
                        </div>
                        <div class="w-full">
                            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                            <input type="text" value="{{ $book->kategori }}" name="kategori" id="category"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                readonly>
                        </div>
                        <div class="w-full">
                            <label for="tanggal_pinjam" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Pinjam</label>
                            <input type="date" name="tanggal_pinjam"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                required>
                        </div>
                        <div class="w-full">
                            <label for="tanggal_kembali" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Kembali</label>
                            <input type="date" name="tanggal_kembali"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                required>
                        </div>
                    </div>
                    <button type="submit"
                        class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                        Pinjam Buku
                    </button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</x-app-layout>