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
                    <button class="bg-[#2960c8] text-[#ffffff]  font-bold text-sm  p-3 rounded-lg hover:bg-purple-800 active:scale-95 transition-transform transform">Pinjam Buku</button>
                </div>
                <!---->
            </div>
        </div>
    </div>
    
    @endforeach
</x-app-layout>