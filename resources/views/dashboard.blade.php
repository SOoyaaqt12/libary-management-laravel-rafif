<x-app-layout>
    <div class="bg-white dark:bg-gray-800 dark:border-gray-800 flex flex-row items-center justify-between gap-4 border-b border slate-6 p-3">
        <div class="ms-80">
            <form class="max-w-md mx-auto">
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="search" id="default-search" class="block w-full p-4 ps-10 pe-60 text-sm text-gray-900 border border-gray-300 rounded-full bg-gray-300 transition hover:shadow-black hover:shadow-2xl hover:scale-110 focus:scale-100 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." required />
                <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 transition hover:shadow-black hover:shadow-2xl hover:scale-110 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-3xl text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
            </div>
        </div>
        </form>
            <div class="me-10">
                <div class="flex flex-row items-center gap-8">
                    <p id="realtime-date" class="text-base text-gray-900 transition hover:scale-105 hover:shadow-black hover:shadow-2xl hover:bg-gray-700 px-3 rounded-full py-1 dark:text-white">{{ now()->format('l, d F Y | H:i') }}</p>
                    <svg class="w-[20px] h-[20px] fill-[#ffffff]" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">

                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z"></path>

                      </svg>
                      <svg style="width:40px; height:40px; fill:#ffffff;"  viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">

                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M399 384.2C376.9 345.8 335.4 320 288 320H224c-47.4 0-88.9 25.8-111 64.2c35.2 39.2 86.2 63.8 143 63.8s107.8-24.7 143-63.8zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256 16a72 72 0 1 0 0-144 72 72 0 1 0 0 144z"></path>

                      </svg>
                </div>
            </div>
    </div>
    <div class=" lg:pl-64 ">
        <div class="flex justify-normal items-center bg-white shadow-2xl dark:bg-gray-800 dark:text-white dark:border-gray-700 p-12 m-12 rounded-3xl border border-gray-200 ">
            <img src="https://lh3.googleusercontent.com/Yjnx-OyJQ669gelXMZckp_iBZAir51y_0SeM1e9C4hPf1fO8BuJrHh53Y49RSNYO7u9Xgb-DxDJhw8Td4o13NXdqOOpmjiiLYaMKchNGZ61SeaPdtj-E9jQPLeKrar2maQ=w1280" class="CENy8b" role="img" style="width: 35%; margin: -0.4322739325% 0 -0.4322739325% 0%">
            <div class="flex flex-col me-10 p-10">
                <p class="text-5xl text-gray-900 font-bold dark:text-white mb-10">Selamat Pagi, Admin!</p>
                <p class="text-xl text-gray-900 dark:text-white">Lorem Ipsum is simply dummy text of the printing and  typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            </div>

        </div>
    </div>
    <div class="lg:pl-64 p-10">
        <div class="flex flex-row">
            <div class="flex flex-col justify-center px-11">
            <p class="text-4xl text-gray-900 font-semibold dark:text-white mb-4">Info Dashboard Buku</p>
            <p class="text-gray-900 dark:text-gray-200">Dashboard informasi buku total buku dipinjam, buku sedang dipinjam, buku dikembalikan, buku rusak</p>
            </div>
        </div>
    </div>
    <div class="lg:pl-64 flex flex-row justify-around pb-9">
        <div class="flex flex-row gap-28">
            <div class="bg-[#6E987C] text-white rounded-3xl shadow-2xl w-full transition duration-300 hover:scale-110 hover:shadow-black">
                <div class="flex flex-row justify-between items-center gap-6 p-20">
                    <i class="fa-solid fa-book"></i>
                    <h3 class="text-2xl text-center font-bold">90</h3>
                </div>
                <p class="text-xl text-center p-7">Total Buku Dipinjam</p>
            </div>
        </div>
        <div class="flex flex-row gap-28">
            <div class="bg-[#22615D] text-white rounded-3xl shadow-2xl w-full transition duration-300 hover:scale-110 hover:shadow-black">
                <div class="flex flex-row justify-between items-center p-20">
                    <i class="fa-solid fa-arrow-turn-up"></i>
                    <h3 class="text-2xl text-center font-bold">78</h3>
                </div>
                <p class="text-xl text-center p-7">Sedang Dipinjam</p>
            </div>
        </div>
        <div class="flex flex-row gap-28">
            <div class="bg-[#FBC78F] text-white rounded-3xl shadow-2xl w-full transition duration-300 hover:scale-110 hover:shadow-black">
                <div class="flex flex-row justify-between items-center p-20">
                    <i class="fa-solid fa-arrow-turn-down"></i>
                    <h3 class="text-2xl text-center font-bold">78</h3>
                </div>
                <p class="text-xl text-center p-7">Buku dikembalikan</p>
            </div>
        </div>
        <div class="flex flex-row gap-28">
            <div class="bg-[#AC455E] text-white rounded-3xl shadow-2xl w-full transition duration-300 hover:scale-110 hover:shadow-black">
                <div class="flex flex-row justify-between items-center p-20">
                    <i class="fa-solid fa-virus-slash"></i>
                    <h3 class="text-2xl text-center font-bold">78</h3>
                </div>
                <p class="text-xl text-center p-7">Total buku Rusak</p>
            </div>
        </div>
    </div>





</x-app-layout>
