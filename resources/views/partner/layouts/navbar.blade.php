<nav class="p-4 md:py-8 xl:px-0 md:container md:mx-w-6xl md:mx-auto">
    <div class="hidden lg:flex lg:justify-between lg:items-center">
        <a href="{{ route('pages.dashboard.partner') }}" class="flex items-start gap-2 group">
            <div class="bg-blue-600 text-white p-2 rounded-md group-hover:bg-blue-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
            </div>
            <p class="text-sm font-light uppercase">
                Dashboard
                <span class="text-base block font-bold tracking-widest">
                    Partner
                </span>
            </p>
        </a>
        <ul class="flex items-center space-x-4 text-sm font-semibold">
            <li><a href="{{ route('pages.dashboard.partner.profile') }}"
                    class="px-2 xl:px-4 py-2 text-gray-800 rounded-md hover:bg-gray-200">Akun Anda</a></li>
            <li><a href="{{ route('pages.dashboard.partner.information') }}"
                    class="px-2 xl:px-4 py-2 text-gray-800 rounded-md hover:bg-gray-200">Informasi Anda</a></li>
            <li class="relative" x-data="{ open: false }">
                <a x-on:click="open = !open" x-on:click.outside="open = false" href="#"
                    class="px-2 xl:px-4 py-2 text-gray-600 rounded-md hover:bg-gray-200 flex gap-2 items-center">
                    Jual
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-4 h-4 stroke-current stroke-2 text-gray-800 transform duration-500 ease-in-out"
                        :class="open ? 'rotate-90' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg> </a>
                <ul x-cloak x-show="open" x-transition
                    class="absolute top-10 left-0 bg-white p-4 rounded-md shadow overflow-hidden w-64">
                    @php
                        $kategoriProperti = App\Models\KategoriProperti::all();
                    @endphp
                    @foreach($kategoriProperti as $kategori)
                    <li>
                        <a href="{{ route('pages.dashboard.properti.' . $kategori->slug) }}"
                            class="p-4 block text-sm text-gray-600 rounded flex items-center gap-2 hover:bg-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                            {{ $kategori->nama_kategori }}
                        </a>
                    </li>
                    @endforeach
                    <li>
                        <a href="{{ route('pages.dashboard.properti') }}"
                            class="p-4 block text-sm text-gray-600 rounded flex items-center gap-2 hover:bg-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                            Semua produk
                        </a>
                    </li>
                </ul>
            </li>
        </ul>

        <ul class="flex items-center gap-6">
            <li>
                <a href="{{ route('pages.dashboard.partner.profile') }}"
                    class="text-sm font-sans text-gray-800 font-semibold tracking-wider">
                    @php
                        $userAuth = auth()->user()->nama;
                    @endphp

                    {{ $userAuth }}
                </a>
            </li>
            <li>
                <a href="{{ route('pages.partner.logout') }}">
                    <div class="p-2 rounded hover:bg-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 stroke-current text-gray-800"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <div x-data="{ open: false }" class="lg:hidden relative flex justify-between w-full">
        <a href="#" class="flex items-start gap-2 group">
            <div class="bg-blue-600 text-white p-3 rounded-md group-hover:bg-blue-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
            </div>
            <p class="text-sm font-light uppercase">
                Dashboard
                <span class="text-base block font-bold tracking-widest">
                    Atom
                </span>
            </p>
        </a>
        <button x-on:click="open = !open" type="button" class="bg-gray-200 p-3 rounded-md">
            <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
            </svg>
            <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        <div x-show="open" x-transition class="absolute top-14 left-0 right-0 w-full bg-white rounded-md border">
            <ul class="p-4">
                <li class="px-4 py-2 rounded hover:bg-gray-200">
                    <a href="#" class="flex items-center gap-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        My Account
                    </a>
                </li>
                <li class="px-4 py-2 rounded hover:bg-gray-200">
                    <a href="#" class="flex items-center gap-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        Transactions
                    </a>
                </li>
                <li class="px-4 py-2 rounded hover:bg-gray-200">
                    <a href="#" class="flex items-center gap-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        Cards
                    </a>
                </li>
                <li class="px-4 py-2 rounded hover:bg-gray-200">
                    <a href="#" class="flex items-center gap-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        Offers
                    </a>
                </li>
            </ul>

        </div>
    </div>
</nav>
