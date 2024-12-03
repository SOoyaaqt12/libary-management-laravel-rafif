<x-app-layout>
    <section class="bg-white dark:bg-gray-900 p-3 sm:p-5 lg:pl-64">
        <div class="mx-auto max-w-screen-2xl px-4 lg:px-12 my-10">
            <!-- Start coding here -->
            <div class="bg-gray-100 dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                    <div class="w-full md:w-1/2">
                        <form class="flex items-center">
                            <label for="simple-search" class="sr-only">Search</label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 transition duration-300 hover:scale-105 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:hover:bg-gray-900 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search" required="">
                            </div>
                        </form>
                    </div>
                    <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">

                        <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                            <button id="defaultModalButton" data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="block text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" type="button">
                                Create product
                            </button>
                        </div>

                        <!-- Main modal -->
                        <div id="defaultModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                            <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                                <!-- Modal content -->
                                <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                    <!-- Modal header -->
                                    <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                            Add Product
                                        </h3>
                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <form method="POST" action="{{ route('books.store') }}">
                                        @csrf
                                        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                                            <div class="sm:col-span-2">
                                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Buku</label>
                                                <input type="text" name="judul_buku" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 transition duration-300 hover:bg-gray-400 hover:shadow-2xl hover:shadow-black dark:hover:bg-gray-900 hover:scale-105 focus:scale-100 focus:shadow-none" placeholder="Type product name" required="">
                                            </div>
                                            <div class="w-full">
                                                <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">penulis</label>
                                                <input type="text" name="penulis" id="brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 hover:shadow-2xl hover:shadow-black dark:focus:border-primary-500 transition duration-300 hover:bg-gray-400 dark:hover:bg-gray-900 hover:scale-105 focus:scale-100 focus:shadow-none" placeholder="Product brand" required="">
                                            </div>
                                            <div class="w-full">
                                                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tahun Terbit</label>
                                                <input type="number" name="tahun_terbit" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 transition duration-300 hover:bg-gray-400 hover:shadow-2xl hover:shadow-black dark:hover:bg-gray-900 hover:scale-105 focus:scale-100 focus:shadow-none" placeholder="Tahun" required="">
                                            </div>
                                            <div>
                                                <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ketagori</label>
                                                <select id="category" name="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 transition duration-300 hover:bg-gray-400 dark:hover:bg-gray-900 hover:scale-105 hover:shadow-2xl hover:shadow-black focus:scale-100 focus:shadow-none">
                                                    <option selected="">Pilih Status</option>
                                                    <option value="1">Tersedia</option>
                                                    <option value="0">Tidak Tersedia</option>
                                                </select>
                                            </div>
                                            <div>
                                                <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                                                <select id="ketagori" name="ketagori" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 transition duration-300 hover:bg-gray-400 dark:hover:bg-gray-900 hover:scale-105 hover:shadow-2xl hover:shadow-black focus:scale-100 focus:shadow-none">
                                                    <option selected="">Pilih Ketagori</option>
                                                    <option value="komik">Komik</option>
                                                    <option value="novel">Novel</option>
                                                    <option value="cerpen">Cerpen</option>
                                                    <option value="PH">Phones</option>
                                                </select>
                                            </div>
                                            <div class="sm:col-span-2">
                                                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                                                <textarea id="description" name="deskripsi" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 transition duration-300 hover:shadow-2xl hover:shadow-black hover:bg-gray-400 dark:hover:bg-gray-900 hover:scale-105 focus:scale-100 focus:shadow-none" placeholder="Your description here"></textarea>
                                            </div>
                                        </div>
                                        <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800 transition duration-300 hover:scale-110 hover:shadow-2xl hover:shadow-black">
                                            Add product
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-4 py-3">No</th>
                                <th scope="col" class="px-4 py-3">Judul Buku</th>
                                <th scope="col" class="px-4 py-3">Penulis</th>
                                <th scope="col" class="px-4 py-3">Ketagori</th>
                                <th scope="col" class="px-4 py-3">Tahun Terbit</th>
                                <th scope="col" class="px-4 py-3">Status</th>
                                <th scope="col" class="px-4 py-3">Deskripsi</th>
                                <th scope="col" class="px-4 py-3">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $books as $book )
                            @csrf
                            <tr class="border-b transition duration-300 hover:scale-95 hover:bg-gray-300 dark:hover:bg-gray-900 dark:border-gray-700">
                                <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $loop->iteration }}</th>
                                <td class="px-4 py-3">{{ $book->judul_buku }}</td>
                                <td class="px-4 py-3">{{ $book->penulis }}</td>
                                <td class="px-4 py-3">{{ $book->ketagori }}</td>
                                <td class="px-4 py-3">{{ $book->tahun_terbit }}</td>
                                <td class="px-4 py-3">
                                    @if ($book->status == 1)
                                        Tersedia
                                    @else
                                        Tidak Tersedia
                                    @endif
                                </td>
                                <td class="px-4 py-3">{{ $book->deskripsi }}</td>
                                <td class="px-4 py-3">
                                    <a href="{{ route('books.edit', $book->id) }}"><button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-full transition duration-300 hover:scale-125 text-sm px-5 py-1.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Edit</button></a>

                                    {{-- delete button --}}
                                <form onsubmit="return confirm('Apakah Anda Yakin?');" action="{{ route('books.destroy', $book->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-full transition duration-300 hover:scale-125 text-sm px-5 py-1.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Delete</button>
                                </form>
                                  </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <nav class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4" aria-label="Table navigation">
                    <span class="text-sm font-normal text-gray-500 dark:text-gray-400">
                        Showing
                        <span class="font-semibold text-gray-900 dark:text-white">1-10</span>
                        of
                        <span class="font-semibold text-gray-900 dark:text-white">1000</span>
                    </span>
                    <ul class="inline-flex items-stretch -space-x-px">
                        <li>
                            <a href="#" class="flex items-center justify-center h-full py-1.5 px-3 ml-0 text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                <span class="sr-only">Previous</span>
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                        </li>
                        <li>
                            <a href="#" aria-current="page" class="flex items-center justify-center text-sm z-10 py-2 px-3 leading-tight text-primary-600 bg-primary-50 border border-primary-300 hover:bg-primary-100 hover:text-primary-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">...</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">100</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-center h-full py-1.5 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                <span class="sr-only">Next</span>
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        </section>
</x-app-layout>
