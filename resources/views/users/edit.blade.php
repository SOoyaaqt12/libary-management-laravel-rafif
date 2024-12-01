<x-app-layout>
    <div class="lg:pl-64 py-36">
        <section class="bg-white dark:bg-gray-900">
            <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
                <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Ubah Data Pengguna</h2>
                <form method="POST" action="{{ route('users.update', $users->id ) }}">
                    @csrf
                    @method('PUT')
                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                        <div class="sm:col-span-2">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Pengguna</label>
                            <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 transition duration-300 hover:scale-110 dark:hover:bg-gray-950 hover:bg-gray-300 hover:shadow-black hover:shadow-2xl focus:bg-gray-50 dark:focus:bg-gray-700 focus:scale-100 focus:shadow-none" value="{{ $users->name }}" required="">
                        </div>
                        <div class="w-full">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 transition duration-300 hover:scale-110 dark:hover:bg-gray-950 hover:bg-gray-300 hover:shadow-black hover:shadow-2xl focus:bg-gray-50 dark:focus:bg-gray-700 focus:scale-100 focus:shadow-none" value="{{ $users->email }}" required="">
                        </div>
                        <div class="w-full">
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 transition duration-300 hover:scale-110 dark:hover:bg-gray-950 hover:bg-gray-300 hover:shadow-black hover:shadow-2xl focus:bg-gray-50 dark:focus:bg-gray-700 focus:scale-100 focus:shadow-none" placeholder="Masukan Password" required="">
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-900 transition duration-300 hover:scale-110 dark:hover:bg-gray-950hover:shadow-black hover:shadow-2xl focus:bg-gray-50 dark:focus:bg-gray-700 focus:scale-100 focus:shadow-none">
                        Add product
                    </button>
                </form>
            </div>
        </section>
    </div>
</x-app-layout>