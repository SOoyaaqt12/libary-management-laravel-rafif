<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
   <span class="sr-only">Open sidebar</span>
   <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
      <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
   </svg>
</button>

<aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidenav">
  <div class="overflow-y-auto py-5 px-3 h-full bg-white border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700">
      <ul class="space-y-2">
        <!-- <img src="https://flowbite.com/docs/images/logo.svg" alt="" > -->
          <li>
              <a href="{{ route('dashboard') }}" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 transition duration-300 hover:scale-90 dark:hover:bg-gray-700 group">
                  <svg aria-hidden="true" class="w-6 h-6 text-gray-400 transition duration-300 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                  <span class="ml-3">Beranda</span>
              </a>
          </li>
          @if (Auth::user()->role == 'admin')
          <li>
              <button type="button" class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-300 hover:scale-90 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-pages" data-collapse-toggle="dropdown-pages">
                  <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-400 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path></svg>
                  <span class="flex-1 ml-3 text-left whitespace-nowrap">Lemari</span>
                  <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
              </button>
              <ul id="dropdown-pages" class="hidden py-2 space-y-2">
                  <li>
                      <a href="{{route('books.index')}}" class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-300 group hover:scale-90 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Lemari Buku</a>
                  </li>
                  <li>
                    <a href="{{ route('books.create')}}" class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-300 group hover:scale-90 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">List Buku</a>
                </li>
              </ul>
          </li>
          <li>
              <button type="button" class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-300 hover:scale-90 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-sales" data-collapse-toggle="dropdown-sales">
                  <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-400 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
                  <span class="flex-1 ml-3 text-left whitespace-nowrap">Users</span>
                  <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
              </button>
              <ul id="dropdown-sales" class="hidden py-2 space-y-2">
                      <li>
                          <a href="{{ route('users.index')}}" class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-300 group hover:scale-90 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Anggota</a>
                      </li>
              </ul>
          </li>
          @endif

          @if (Auth::user()->role == 'anggota')
          <li>
            <button type="button" class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-300 hover:scale-90 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-pages" data-collapse-toggle="dropdown-pages">
                <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-400 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path></svg>
                <span class="flex-1 ml-3 text-left whitespace-nowrap">Lemari</span>
                <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <ul id="dropdown-pages" class="hidden py-2 space-y-2">
                <li>
                    <a href="{{route('anggota.index')}}" class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-300 group hover:scale-90 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Lemari Buku</a>
                </li>
                <li>
                    <a href="{{ route('anggota.create') }}" class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-300 group hover:scale-90 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Riwayat Peminjaman</a>
                </li>
            </ul>
          </li>
          @endif

      </ul>
      <ul class="pt-5 mt-5 space-y-2 border-t border-gray-200 dark:border-gray-700">
          <li>
              <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg transition duration-300 hover:scale-90 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
                  <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-400 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>
                  <span class="ml-3">Docs</span>
              </a>
          </li>

          <li>
              <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg transition duration-300 hover:scale-90 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
                  <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-400 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z" clip-rule="evenodd"></path></svg>
                  <span class="ml-3">Help</span>
              </a>
          </li>
          <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 hover:scale-125 transition duration-300 focus:ring-red-300 font-medium rounded-full text-sm py-1 px-5 ms-5 mt-10 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                    <span class="flex items-center text-base font-normal text-gray-900 dark:text-white group">Keluar</span>
            </button>
          </form>
      </ul>
      <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 transition duration-300 hover:scale-125 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg text-sm ms-20 mt-32 p-2">
        <svg id="theme-toggle-dark-icon" class="hidden w-8 h-8" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
        <svg id="theme-toggle-light-icon" class="hidden w-8 h-8" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
    </button>
  </div>


</aside>

