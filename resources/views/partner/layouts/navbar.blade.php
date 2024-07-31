<nav x-data="{ scrolled: false }" x-init="window.addEventListener('scroll', () => scrolled = window.scrollY > 10)" :class="{ 'bg-white text-white': scrolled }" class="p-4 md:py-8 xl:px-0 md:container md:mx-w-6xl md:mx-auto sticky top-0 z-10 transition-colors duration-300">
    <div class="hidden lg:flex lg:justify-between lg:items-center">
        <a href="{{ route('pages.dashboard.partner') }}" class="flex items-center gap-2 group">
            <img class="h-10 w-10" src="{{ asset('img/icons/properti-ideal-icon.png') }}" alt="">
            <p class="text-2xl block font-bold text-blue-600">
                Partner
            </p>
        </a>
        <ul class="flex items-center space-x-4 text-md font-semibold">
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
                    @foreach ($kategoriProperti as $kategori)
                        <li>
                            <a href="{{ route('pages.dashboard.properti.' . $kategori->slug) }}"
                                class="p-4 block text-md text-gray-600 rounded flex items-center gap-2 hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                {{ $kategori->nama_kategori }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </li>
            <li><a href="{{ route('pages.dashboard.properti') }}"
                    class="px-2 xl:px-4 py-2 text-gray-800 rounded-md hover:bg-gray-200">Semua properti</a></li>
        </ul>

        <ul class="flex items-center gap-6">
            <li>
                <a href="{{ route('pages.dashboard.partner.profile') }}"
                    class="text-md font-sans text-gray-800 font-semibold tracking-wider">
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
        <a href="{{ route('pages.dashboard.partner') }}" class="flex items-center gap-2 group">
            <img class="h-10 w-10" src="{{ asset('img/icons/properti-ideal-icon.png') }}" alt="">
            <p class="text-2xl block font-bold text-blue-600">
                Partner
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
                        Informasi Anda
                    </a>
                </li>
                <li class="px-4 py-2 rounded hover:bg-gray-200">
                    <a href="#" class="flex items-center gap-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        Jual
                    </a>
                </li>
                <li class="px-4 py-2 rounded hover:bg-gray-200">
                    <a href="#" class="flex items-center gap-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        Semua Properti
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
