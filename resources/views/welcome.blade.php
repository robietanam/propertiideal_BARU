@extends('includes.app')

@section('title', 'Properti Ideal | Jual beli properti')

@section('content')
    <div class="relative h-[40rem] isolate overflow-hidden bg-primarybase" x-data="{ animate: false }" x-init="setTimeout(() => animate = true, 800)">
        <div class="absolute top-0 w-full h-full bg-center bg-cover"
            style="background-image: url('{{ asset('img/assets/beranda-hero.jpg') }}');">
            <span id="blackOverlay" class="w-full h-full absolute opacity-25 bg-black"></span>
        </div>

        <div class="relative h-full px-6 md:px-16 z-20 text-center md:text-left grid grid-cols-1 md:grid-cols-2 ">
            <div class="flex flex-col justify-center gap-6">
                <p class="text-6xl font-bold text-primary-yellow " x-show="animate"
                    x-transition:enter="transform transition-transform duration-700"
                    x-transition:enter-start="-translate-x-full opacity-0"
                    x-transition:enter-end="translate-x-0 opacity-100">Temukan</p>
                <p class="text-6xl font-bold text-primary-blue p-3 bg-white rounded-lg w-fit bg-opacity-50" x-show="animate"
                    x-transition:enter="transform transition-transform duration-700 delay-200"
                    x-transition:enter-start="-translate-x-full opacity-0"
                    x-transition:enter-end="translate-x-0 opacity-100">Properti Ideal
                    Mu!
                </p>
                <p class="text-base text-white " x-show="animate"
                    x-transition:enter="transform transition-transform duration-1000 delay-500"
                    x-transition:enter-start="-translate-x-full opacity-0"
                    x-transition:enter-end="translate-x-0 opacity-100">Kami menyediakan berbagai pilihan properti yang cocok
                    untuk berbagai
                    kebutuhan,
                    mulai dari hunian pribadi
                    hingga bisnis komersil.</p>
                <div class="flex flex-col md:flex-row items-center md:items-start gap-3" x-show="animate"
                    x-transition:enter="transform transition-transform duration-1000 delay-500"
                    x-transition:enter-start="-translate-x-full opacity-0"
                    x-transition:enter-end="translate-x-0 opacity-100">
                    <a href="/beli" class="text-white px-4 py-2 bg-primary-blue rounded w-fit items-center flex gap-2">
                        <p class="text-sm font-semibold">Beli Properti</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#ffffff"
                            viewBox="0 0 256 256">
                            <path
                                d="M221.66,133.66l-72,72a8,8,0,0,1-11.32-11.32L196.69,136H40a8,8,0,0,1,0-16H196.69L138.34,61.66a8,8,0,0,1,11.32-11.32l72,72A8,8,0,0,1,221.66,133.66Z">
                            </path>
                        </svg>
                    </a>
                    <a href="/sewa" class="text-white px-4 py-2 border border-white rounded w-fit items-center flex gap-2">
                        <p class="text-sm font-semibold">Sewa Properti</p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col px-6 md:px-16 py-16 gap-12 md:gap-24 bg-white">
        <div class="flex flex-col gap-3 text-center items-center" data-aos="zoom-in">
            <p class="bg-primary-blue text-white text-base font-semibold py-[2px] px-6 w-fit rounded-full">Layanan</p>
            <p class="text-2xl md:text-4xl font-semibold text-black">Layanan Terbaik Kami</p>
            <p class="text-sm text-black">Segalanya lebih mudah dengan pelayanan yang maksimal.</p>
        </div>
        <div class="grid grid-cols-2 gap-12 px-6 md:gap-20 md:px-10 justify-center">
            <div data-aos="flip-left" class="max-md:col-span-2">
                <div
                    class="relative flex flex-col text-center border rounded-3xl gap-3 pt-12 pb-6 px-6 w-full hover:cursor-pointer hover:scale-110 transition-transform ease-in-out">
                    <img src="{{ asset('img/icons/properti-ideal-dark-icon.svg') }}"
                        class="absolute w-14 aspect-square left-1/2 -translate-x-1/2 -top-5" alt="Icon Propertiideal">
                    <p class="text-xl font-semibold text-black">Properti Solution</p>
                    <p class="text-base text-black">Properti Ideal berkomitmen menyediakan layanan yang disesuaikan dengan
                        kebutuhan Anda,
                        mulai dari pembangunan rumah, renovasi, hingga desain interior, dengan solusi lengkap dari tim
                        profesional kami.</p>
                    <a href="/layanan/propertisolution" class="text-base font-semibold text-primary-blue underline">Jelajahi Sekarang</a>
                </div>
            </div>
            <div data-aos="flip-right" class="max-md:col-span-2">
                <div
                    class="relative flex flex-col text-center border rounded-3xl gap-3 pt-12 pb-6 px-6 w-full hover:cursor-pointer hover:scale-110 transition-transform ease-in-out">

                    <img src="{{ asset('img/icons/properti-ideal-dark-icon.svg') }}"
                        class="absolute w-14 aspect-square left-1/2 -translate-x-1/2 -top-5" alt="Icon Propertiideal">
                    <p class="text-xl font-semibold text-black">Properti Ideal</p>
                    <p class="text-base text-black">Dari hunian luas hingga layanan yang memudahkan proses pembelian,
                        Properti
                        Ideal
                        memastikan pengalaman yang memuaskan dan hasil sesuai harapan. Bergabunglah dengan kami dan temukan
                        hunian impian Anda sekarang!</p>
                    <a href="/layanan/propertiideal" class="text-base font-semibold text-primary-blue">Jelajai Sekarang</a>
                </div>
            </div>
        </div>
    </div>

    <div
        class="grid grid-cols-2 py-16 px-6 md:px-16  items-center justify-center md:justify-between gap-4 md:gap-24 bg-secondary-blue">
        <div class="max-md:col-span-2 flex flex-col items-center md:items-start text-center md:text-left gap-3 ">
            <p data-aos="zoom-out-down"
                class="bg-primary-yellow text-secondary-blue text-base font-semibold py-[2px] px-6 w-fit rounded-full text-center">
                Sosial Media</p>
            <p data-aos="zoom-out-right" class="text-2xl md:text-4xl font-semibold text-white">Ikuti Media Sosial Kami</p>
            <p data-aos="zoom-out-right" class="text-sm text-white">Ikuti dan pantau terus media sosial kami agar tidak
                ketinggalan konten dan promo
                menarik dari kami!</p>
            <a href="https://www.instagram.com/propertiideal_id/" target="_blank" class="text-white px-4 py-2 border border-white rounded w-fit items-center flex gap-2"
                data-aos="zoom-in-up">
                <p class="text-sm font-semibold">Follow</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#f8f1f1" viewBox="0 0 256 256">
                    <path
                        d="M128,80a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160ZM176,24H80A56.06,56.06,0,0,0,24,80v96a56.06,56.06,0,0,0,56,56h96a56.06,56.06,0,0,0,56-56V80A56.06,56.06,0,0,0,176,24Zm40,152a40,40,0,0,1-40,40H80a40,40,0,0,1-40-40V80A40,40,0,0,1,80,40h96a40,40,0,0,1,40,40ZM192,76a12,12,0,1,1-12-12A12,12,0,0,1,192,76Z">
                    </path>
                </svg>
            </a>
        </div>
        <div class="grid grid-cols-2 gap-6 max-md:col-span-2 py-6">
            <div class="h-[28rem] w-full rounded-lg overflow-hidden">
                <div id="splide" class="splide !bg-transparent">
                    <div class="splide__track">
                        <ul class="splide__list">
                            @foreach (range(1, 10) as $index)
                                <li class="splide__slide">
                                    <div class="flex justify-center items-center py-2 h-fit">
                                        <div class="bg-white w-full h-full rounded-lg overflow-hidden">
                                            <img src="{{ asset('img/assets/beranda-hero.jpg') }}" class="object-cover"
                                                alt="Slide {{ $index }}">
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="h-[28rem] w-full rounded-lg">
                <div id="splide2" class="splide !bg-transparent">
                    <div class="splide__track ">
                        <ul class="splide__list">
                            @foreach (range(1, 10) as $index)
                                <li class="splide__slide ">
                                    <div class="flex justify-center items-center py-2 h-fit">
                                        <div class="bg-white w-full h-full rounded-lg overflow-hidden">
                                            <img src="{{ asset('img/assets/beranda-img1.png') }}"
                                                class="object-none object-center" alt="Slide {{ $index }}">
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="grid grid-cols-2 place-items-center px-6 md:px-16 pb-8 pt-16 md:justify-between gap-10 bg-white">

        <img data-aos="zoom-in" src="{{ asset('img/assets/beranda-img1.png') }}"
            class="max-md:col-span-2 rounded-lg w-full aspect-video object-cover" alt="Slide {{ $index }}">
        <div class="flex flex-col items-center md:items-start text-center md:text-left gap-3 max-md:col-span-2 ">
            <p data-aos="fade-right"
                class="bg-primary-blue text-white text-base font-semibold py-[2px] px-6 w-fit rounded-full text-center">
                Review</p>
            <p data-aos="fade-right" class="text-2xl md:text-4xl font-semibold text-black">Lihat Review Properti
                Lengkap
            </p>
            <p data-aos="fade-right" class="text-sm text-black">Jangan lewatkan video terbaru kami dengan ulasan
                lengkap
                berbagai properti
                terbaik untuk Anda!</p>
            <a href="https://www.youtube.com/@PropertiIdeal" target="_blank" data-aos="zoom-out-up"
                class="text-black bg-primary-yellow px-4 py-2 border rounded w-fit items-center flex gap-2">
                <p class="text-sm font-semibold">Subscribe</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#2d2d2d"
                    viewBox="0 0 256 256">
                    <path
                        d="M164.44,121.34l-48-32A8,8,0,0,0,104,96v64a8,8,0,0,0,12.44,6.66l48-32a8,8,0,0,0,0-13.32ZM120,145.05V111l25.58,17ZM234.33,69.52a24,24,0,0,0-14.49-16.4C185.56,39.88,131,40,128,40s-57.56-.12-91.84,13.12a24,24,0,0,0-14.49,16.4C19.08,79.5,16,97.74,16,128s3.08,48.5,5.67,58.48a24,24,0,0,0,14.49,16.41C69,215.56,120.4,216,127.34,216h1.32c6.94,0,58.37-.44,91.18-13.11a24,24,0,0,0,14.49-16.41c2.59-10,5.67-28.22,5.67-58.48S236.92,79.5,234.33,69.52Zm-15.49,113a8,8,0,0,1-4.77,5.49c-31.65,12.22-85.48,12-86,12H128c-.54,0-54.33.2-86-12a8,8,0,0,1-4.77-5.49C34.8,173.39,32,156.57,32,128s2.8-45.39,5.16-54.47A8,8,0,0,1,41.93,68c30.52-11.79,81.66-12,85.85-12h.27c.54,0,54.38-.18,86,12a8,8,0,0,1,4.77,5.49C221.2,82.61,224,99.43,224,128S221.2,173.39,218.84,182.47Z">
                    </path>
                </svg>
            </a>
        </div>
    </div>

    <div class="pt-8 pb-16 px-6 md:px-16 max-w-full mx-auto flex flex-col gap-12">
        <div data-aos="zoom-in-down" class="flex flex-col gap-3 text-center">
            <p class="font-semibold text-primary-blue">Pertanyaan dari calon Partner</p>
            <p class="text-2xl md:text-4xl text-black font-semibold text-base-content">Paling sering ditanyakan</p>
        </div>
        <ul class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-6" data-aos="zoom-in">
            <li class="bg-secondary-white rounded-xl h-fit">
                <button
                    class="relative flex gap-2 items-center w-full py-5 text-base font-semibold text-left md:text-lg border-base-content/10 p-6"
                    aria-expanded="false" onclick="toggleFAQ(this)">
                    <span class="flex-1 text-lg font-semibold">Bagaimana cara mendaftar sebagai mitra penjual
                        di platform ini? </span>
                    <svg class="flex-shrink-0 w-4 h-4 ml-auto fill-current text-primary-blue" viewBox="0 0 16 16"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect y="7" width="16" height="2" rx="1"
                            class="transform origin-center transition duration-200 ease-out false"></rect>
                        <rect y="7" width="16" height="2" rx="1"
                            class="transform origin-center rotate-90 transition duration-200 ease-out false">
                        </rect>
                    </svg>
                </button>
                <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden"
                    style="transition: max-height 0.3s ease-in-out 0s;">
                    <div class="pb-5 leading-relaxed">
                        <div class="space-y-2 leading-relaxed text-base px-6">Anda dapat mendaftar sebagai mitra penjual
                            melalui
                            halaman pendaftaran di website kami. Isi formulir pendaftaran dan tim kami akan menghubungi
                            Anda untuk proses verifikasi dan onboarding</div>
                    </div>
                </div>
            </li>
            <li class="bg-secondary-white rounded-xl h-fit">
                <button
                    class="relative flex gap-2 items-center w-full py-5 text-base font-semibold text-left md:text-lg border-base-content/10 p-6"
                    aria-expanded="false" onclick="toggleFAQ(this)">
                    <span class="flex-1 text-lg font-semibold">Apa saja syarat untuk menjadi mitra penjual di
                        platform ini?
                    </span>
                    <svg class="flex-shrink-0 w-4 h-4 ml-auto fill-current text-primary-blue" viewBox="0 0 16 16"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect y="7" width="16" height="2" rx="1"
                            class="transform origin-center transition duration-200 ease-out false"></rect>
                        <rect y="7" width="16" height="2" rx="1"
                            class="transform origin-center rotate-90 transition duration-200 ease-out false">
                        </rect>
                    </svg>
                </button>
                <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden"
                    style="transition: max-height 0.3s ease-in-out 0s;">
                    <div class="pb-5 leading-relaxed">
                        <div class="space-y-2 leading-relaxed text-base px-6">Kami memerlukan mitra penjual untuk memiliki
                            izin usaha
                            yang sah dan mematuhi standar kualitas serta kebersihan yang ditetapkan. Dokumen pendukung
                            akan diperiksa selama proses pendaftaran.
                        </div>
                    </div>
                </div>
            </li>
            <li class="bg-secondary-white rounded-xl h-fit">
                <button
                    class="relative flex gap-2 items-center w-full py-5 text-base font-semibold text-left md:text-lg border-base-content/10 p-6"
                    aria-expanded="false" onclick="toggleFAQ(this)">
                    <span class="flex-1 text-lg font-semibold">Bagaimana cara saya mengelola daftar properti
                        yang saya jual?</span>
                    <svg class="flex-shrink-0 w-4 h-4 ml-auto fill-current text-primary-blue" viewBox="0 0 16 16"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect y="7" width="16" height="2" rx="1"
                            class="transform origin-center transition duration-200 ease-out false"></rect>
                        <rect y="7" width="16" height="2" rx="1"
                            class="transform origin-center rotate-90 transition duration-200 ease-out false">
                        </rect>
                    </svg>
                </button>
                <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden"
                    style="transition: max-height 0.3s ease-in-out 0s;">
                    <div class="pb-5 leading-relaxed">
                        <div class="space-y-2 leading-relaxed text-base px-6">Setelah menjadi mitra penjual, Anda akan
                            mendapatkan
                            akses ke dashboard khusus di platform kami. Di dashboard tersebut, Anda dapat menambah,
                            mengedit, atau menghapus daftar properti Anda, serta mengelola informasi terkait harga dan
                            deskripsi</div>
                    </div>
                </div>
            </li>
            <li class="bg-secondary-white rounded-xl h-fit">
                <button
                    class="relative flex gap-2 items-center w-full py-5 text-base font-semibold text-left md:text-lg border-base-content/10 p-6"
                    aria-expanded="false" onclick="toggleFAQ(this)">
                    <span class="flex-1 text-lg font-semibold">Apakah ada biaya pendaftaran atau biaya
                        bulanan untuk menjadi mitra penjual?
                    </span>
                    <svg class="flex-shrink-0 w-4 h-4 ml-auto fill-current text-primary-blue" viewBox="0 0 16 16"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect y="7" width="16" height="2" rx="1"
                            class="transform origin-center transition duration-200 ease-out false"></rect>
                        <rect y="7" width="16" height="2" rx="1"
                            class="transform origin-center rotate-90 transition duration-200 ease-out false">
                        </rect>
                    </svg>
                </button>
                <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden"
                    style="transition: max-height 0.3s ease-in-out 0s;">
                    <div class="pb-5 leading-relaxed">
                        <div class="space-y-2 leading-relaxed text-base px-6">Kami tidak mengenakan biaya pendaftaran atau
                            biaya
                            bulanan. Namun, kami akan mengambil komisi dari setiap transaksi yang berhasil dilakukan
                            melalui platform kami.
                        </div>
                    </div>
                </div>
            </li>
            <li class="bg-secondary-white rounded-xl h-fit">
                <button
                    class="relative flex gap-2 items-center w-full py-5 text-base font-semibold text-left md:text-lg border-base-content/10 p-6"
                    aria-expanded="false" onclick="toggleFAQ(this)">
                    <span class="flex-1 text-lg font-semibold">Bagaimana proses pembayaran dilakukan untuk
                        transaksi yang berhasil?</span>
                    <svg class="flex-shrink-0 w-4 h-4 ml-auto fill-current text-primary-blue" viewBox="0 0 16 16"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect y="7" width="16" height="2" rx="1"
                            class="transform origin-center transition duration-200 ease-out false"></rect>
                        <rect y="7" width="16" height="2" rx="1"
                            class="transform origin-center rotate-90 transition duration-200 ease-out false">
                        </rect>
                    </svg>
                </button>
                <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden"
                    style="transition: max-height 0.3s ease-in-out 0s;">
                    <div class="pb-5 leading-relaxed">
                        <div class="space-y-2 leading-relaxed text-base px-6">Pembayaran untuk transaksi akan dilakukan
                            diluar sistem
                            sesuai kesepakatan antara penjual dan pembeli</div>
                    </div>
                </div>
            </li>
            <li class="bg-secondary-white rounded-xl h-fit">
                <button
                    class="relative flex gap-2 items-center w-full py-5 text-base font-semibold text-left md:text-lg border-base-content/10 p-6"
                    aria-expanded="false" onclick="toggleFAQ(this)">
                    <span class="flex-1 text-lg font-semibold">Apakah saya bisa menentukan harga jual untuk
                        properti yang saya tawarkan? </span>
                    <svg class="flex-shrink-0 w-4 h-4 ml-auto fill-current text-primary-blue" viewBox="0 0 16 16"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect y="7" width="16" height="2" rx="1"
                            class="transform origin-center transition duration-200 ease-out false"></rect>
                        <rect y="7" width="16" height="2" rx="1"
                            class="transform origin-center rotate-90 transition duration-200 ease-out false">
                        </rect>
                    </svg>
                </button>
                <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden"
                    style="transition: max-height 0.3s ease-in-out 0s;">
                    <div class="pb-5 leading-relaxed">
                        <div class="space-y-2 leading-relaxed text-base px-6">Ya, sebagai mitra penjual, Anda memiliki
                            kebebasan penuh
                            untuk menentukan harga jual properti yang Anda tawarkan. Kami mendorong Anda untuk
                            menetapkan harga yang kompetitif sesuai dengan nilai pasar</div>
                    </div>
                </div>
            </li>
            <li class="bg-secondary-white rounded-xl h-fit">
                <button
                    class="relative flex gap-2 items-center w-full py-5 text-base font-semibold text-left md:text-lg border-base-content/10 p-6"
                    aria-expanded="false" onclick="toggleFAQ(this)">
                    <span class="flex-1 text-lg font-semibold">Apakah platform ini menyediakan dukungan
                        pemasaran untuk mitra penjual? </span>
                    <svg class="flex-shrink-0 w-4 h-4 ml-auto fill-current text-primary-blue" viewBox="0 0 16 16"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect y="7" width="16" height="2" rx="1"
                            class="transform origin-center transition duration-200 ease-out false"></rect>
                        <rect y="7" width="16" height="2" rx="1"
                            class="transform origin-center rotate-90 transition duration-200 ease-out false">
                        </rect>
                    </svg>
                </button>
                <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden"
                    style="transition: max-height 0.3s ease-in-out 0s;">
                    <div class="pb-5 leading-relaxed">
                        <div class="space-y-2 leading-relaxed text-base px-6">Ya, kami menyediakan dukungan pemasaran dan
                            promosi
                            untuk mitra penjual, termasuk fitur-fitur promosi di platform kami dan bantuan dalam
                            strategi pemasaran untuk meningkatkan visibilitas dan penjualan properti Anda</div>
                    </div>
                </div>
            </li>
            <li class="bg-secondary-white rounded-xl h-fit">
                <button
                    class="relative flex gap-2 items-center w-full py-5 text-base font-semibold text-left md:text-lg border-base-content/10 p-6"
                    aria-expanded="false" onclick="toggleFAQ(this)">
                    <span class="flex-1 text-lg font-semibold">Apakah mitra penjual dapat menjual properti
                        yang berada di luar wilayah operasional saat ini?</span>
                    <svg class="flex-shrink-0 w-4 h-4 ml-auto fill-current text-primary-blue" viewBox="0 0 16 16"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect y="7" width="16" height="2" rx="1"
                            class="transform origin-center transition duration-200 ease-out false"></rect>
                        <rect y="7" width="16" height="2" rx="1"
                            class="transform origin-center rotate-90 transition duration-200 ease-out false">
                        </rect>
                    </svg>
                </button>
                <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden"
                    style="transition: max-height 0.3s ease-in-out 0s;">
                    <div class="pb-5 leading-relaxed">
                        <div class="space-y-2 leading-relaxed text-base px-6">
                            Kami terbuka untuk bekerja sama dengan mitra penjual dari berbagai wilayah. Jika properti
                            Anda berada di luar wilayah operasional saat ini, silakan hubungi tim kami untuk
                            mendiskusikan kemungkinan kerja sama dan pengaturan logistik.</div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <script>
        function toggleFAQ(button) {
            const content = button.nextElementSibling;
            button.setAttribute("aria-expanded", button.getAttribute("aria-expanded") === "false" ? "true" : "false");
            content.style.maxHeight = button.getAttribute("aria-expanded") === "true" ? content.scrollHeight + "px" : "0";
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @push('js')
        @vite('resources/js/welcome.js')
        <script>
            $(document).ready(function() {
                $(window).scroll(function() {
                    var scrollPosition = $(window).scrollTop();
                    var blurTriggerPosition = 200;

                    if (scrollPosition > blurTriggerPosition) {
                        $('.sticky').addClass('blurred-background');
                    } else {
                        $('.sticky').removeClass('blurred-background');
                    }
                });
            });
        </script>
    @endpush
@endsection
