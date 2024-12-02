<x-app-layout>
    <section class="bg-white dark:bg-gray-900 lg:pl-64">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add Book </h2>
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
                        <input type="number" name="tahun_terbit" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 transition duration-300 hover:bg-gray-400 hover:shadow-2xl hover:shadow-black dark:hover:bg-gray-900 hover:scale-105 focus:scale-100 focus:shadow-none" placeholder="$2999" required="">
                    </div>
                    <div>
                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ketagori</label>
                        <select id="category" name="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 transition duration-300 hover:bg-gray-400 dark:hover:bg-gray-900 hover:scale-105 hover:shadow-2xl hover:shadow-black focus:scale-100 focus:shadow-none">
                            <option selected="">Pilih Status</option>
                            <option value="tersedia">Tersedia</option>
                            <option value="tidak_tersedia">Tidak Tersedia</option>
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
                    <div>
                        <label for="item-weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah Stok</label>
                        <input type="number" name="jumlah_stok" id="item-weight" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 transition duration-300 hover:bg-gray-400 darkhover:bg-gray-900 hover:scale-105 hover:shadow-2xl hover:shadow-black focus:scale-100 focus:shadow-none" placeholder="12" required="">
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
      </section>
</x-app-layout>