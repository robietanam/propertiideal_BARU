@extends('includes.app')

@section('title', 'Properti Ideal | Partner')

@section('content')
    <div>
        <section
            class="min-h-screen relative overflow-hidden bg-gradient-to-b from-green-50 via-transparent to-transparent pb-12 pt-20 sm:pb-16 sm:pt-32 lg:pb-24 xl:pb-32 xl:pt-40"
            x-data="{ animate: false }" x-init="setTimeout(() => animate = true, 800)">
            <div class="relative z-10">
                <div
                    class="absolute inset-x-0 top-1/2 -z-10 flex -translate-y-1/2 justify-center overflow-hidden [mask-image:radial-gradient(50%_45%_at_50%_55%,white,transparent)]">
                    <svg class="h-[60rem] w-[100rem] flex-none stroke-green-600 opacity-20" aria-hidden="true">
                        <defs>
                            <pattern id="e9033f3e-f665-41a6-84ef-756f6778e6fe" width="200" height="200" x="50%" y="50%"
                                patternUnits="userSpaceOnUse" patternTransform="translate(-100 0)">
                                <path d="M.5 200V.5H200" fill="none"></path>
                            </pattern>
                        </defs>
                        <svg x="50%" y="50%" class="overflow-visible fill-green-50">
                            <path d="M-300 0h201v201h-201Z M300 200h201v201h-201Z" stroke-width="0"></path>
                        </svg>
                        <rect width="100%" height="100%" stroke-width="0"
                            fill="url(#e9033f3e-f665-41a6-84ef-756f6778e6fe)">
                        </rect>
                    </svg>
                </div>
            </div>
            <div class="relative z-20 mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl text-center">
                    <h1 class="block font-bold text-textbase text-5xl md:text-5xl lg:text-6xl" x-show="animate"
                        x-transition:enter="transform transition-transform duration-700"
                        x-transition:enter-start="-translate-y-full opacity-0"
                        x-transition:enter-end="translate-y-0 opacity-100">
                        Jual <span class="text-primarybase">Properti</span> Anda bersama kami!
                    </h1>
                    <div class="mt-5 max-w-3xl" x-show="animate"
                        x-transition:enter="transform transition-transform duration-700"
                        x-transition:enter-start="translate-y-full opacity-0"
                        x-transition:enter-end="translate-y-0 opacity-100">
                        <p class="text-lg text-textbase">Jual properti, beli properti
                            dengan berbagai layanan yang tersedia di Properti Ideal.</p>
                    </div>
                    <div class="mt-12 grid-cols-1 grid md:grid-cols-2 gap-8 sm:grid-cols-2 sm:gap-0 sm:gap-x-4">
                        <a x-show="animate" x-transition:enter="transform ease-out transition-transform duration-700"
                            x-transition:enter-start="scale-0 opacity-0" x-transition:enter-end="scale-100 opacity-100"
                            href="{{ route('pages.submission') }}"
                            class="flex flex-row items-center justify-center gap-x-2 rounded-lg text-white px-10 py-3 bg-primarybase">
                            <svg class="h-[30px] text-white" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 64 64" stroke-width="3" stroke="#000000" fill="none">
                                <path d="M14,39.87,24.59,50.51s33-14,31.23-42.29C55.82,8.22,29.64,4.28,14,39.87Z">
                                </path>
                                <path d="M44.69,9.09a12.3,12.3,0,0,0,3.48,6.73,12.31,12.31,0,0,0,7,3.52"></path>
                                <circle cx="39.46" cy="24.56" r="6.2"></circle>
                                <path
                                    d="M14.89,37.82l-5.3.68a.27.27,0,0,1-.28-.37l3.93-9a2.65,2.65,0,0,1,1.88-1.53l6.59-1.38">
                                </path>
                                <path
                                    d="M26.55,49.4l-.69,5.3a.27.27,0,0,0,.37.28l9-3.92a2.69,2.69,0,0,0,1.53-1.89l1.38-6.59">
                                </path>
                                <path d="M22.21,48.13c-2.37,7.41-14.1,7.78-14.1,7.78S8,44.51,15.76,41.67"></path>
                            </svg>
                            Jadi Partner
                        </a>
                        <a href="{{ route('pages.partner.login') }}" x-show="animate"
                            x-transition:enter="transform ease-out transition-transform duration-700"
                            x-transition:enter-start="scale-0 opacity-0" x-transition:enter-end="scale-100 opacity-100"
                            class="flex flex-row items-center justify-center gap-x-2 rounded-lg border border-primarybase px-10 py-3 text-primarybase">Masuk
                            sebagai Partner →
                        </a>
                    </div>
                </div>
                <div class="w-full mx-auto mt-16 px-0 md:px-16 text-center md:w-10/12" x-show="animate"
                    x-transition:enter="transform ease-out transition-transform duration-700"
                    x-transition:enter-start="scale-0 opacity-0" x-transition:enter-end="scale-100 opacity-100">
                    <div class="relative z-0 w-full mt-8">
                        <div class="relative overflow-hidden shadow-2xl">
                            <div class="flex items-center flex-none px-4 bg-primarybase rounded-b-none h-11 rounded-xl">
                                <div class="flex space-x-1.5">
                                    <div class="w-3 h-3 border-2 border-white rounded-full"></div>
                                    <div class="w-3 h-3 border-2 border-white rounded-full"></div>
                                    <div class="w-3 h-3 border-2 border-white rounded-full"></div>
                                </div>
                            </div>
                            <img src="{{ asset('img/jual-hero.png') }}" />
                        </div>
                    </div>
                </div>
        </section>

        <section class="bg-white py-12 pb-32 sm:py-10 lg:py-10 xl:py-10 max-md:px-5">
            <div class="mx-auto max-w-full lg:px-20">
                <div class="text-center">
                    <p data-aos="fade-down" data-aos-anchor-placement="center-center"
                        class="text-lg font-semibold text-textbase">Cara menjadi Partner Properti Ideal?
                    </p>
                    <h2 data-aos="zoom-in" data-aos-anchor-placement="center-center"
                        class="mt-6 text-6xl font-bold tracking-tight text-textbase max-md:text-2xl lg:text-5xl">Hanya 4
                        langkah, <span class="text-primarybase">tanpa ribet</span>
                    </h2>
                    <p data-aos="zoom-in" data-aos-anchor-placement="center-center"
                        class="mx-auto mt-4 max-w-2xl text-lg font-normal text-textbase lg:text-xl lg:leading-8 max-md:text-lg">
                        Isi formulir, validasi, jadi Partner, mulai berjualan 🤩
                    </p>
                </div>
                <ul
                    class="mx-auto mt-12 grid max-w-full xs:grid-cols-1 md:grid-cols-4 gap-10 sm:mt-16 lg:mt-20 lg:max-w-full lg:grid-cols-4">
                    <li class="flex-start group relative flex lg:flex-col" data-aos="zoom-in" data-aos-delay="100">
                        <span
                            class="absolute left-[18px] top-14 h-[calc(100%_-_32px)] w-px bg-gray-300 lg:right-0 lg:left-auto lg:top-[18px] lg:h-px lg:w-[calc(100%_-_72px)]"
                            aria-hidden="true"></span>
                        <div
                            class="inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-xl border border-gray-300 bg-gray-50 transition-all duration-200 group-hover:border-white group-hover:bg-textbase">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 text-textbase group-hover:text-white">
                                <path
                                    d="M21 12C21 13.6569 16.9706 15 12 15C7.02944 15 3 13.6569 3 12M21 5C21 6.65685 16.9706 8 12 8C7.02944 8 3 6.65685 3 5M21 5C21 3.34315 16.9706 2 12 2C7.02944 2 3 3.34315 3 5M21 5V19C21 20.6569 16.9706 22 12 22C7.02944 22 3 20.6569 3 19V5"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>
                        <div class="ml-6 lg:ml-0 lg:mt-10">
                            <h3
                                class="text-xl font-bold text-textbase before:mb-2 before:block before:font-mono before:text-sm before:text-textbase">
                                Isi formulir
                            </h3>
                            <h4 class="mt-2 text-base text-textbase">Sesuaikan isi formulir dengan kondisi di Lapangan
                            </h4>
                        </div>
                    </li>
                    <li class="flex-start group relative flex lg:flex-col" data-aos="zoom-in" data-aos-delay="500">
                        <span
                            class="absolute left-[18px] top-14 h-[calc(100%_-_32px)] w-px bg-gray-300 lg:right-0 lg:left-auto lg:top-[18px] lg:h-px lg:w-[calc(100%_-_72px)]"
                            aria-hidden="true"></span>
                        <div
                            class="inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-xl border border-gray-300 bg-gray-50 transition-all duration-200 group-hover:border-white group-hover:bg-textbase">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-textbase group-hover:text-white">
                                <path
                                    d="M2 3L2 21M22 3V21M11.8 20H12.2C13.8802 20 14.7202 20 15.362 19.673C15.9265 19.3854 16.3854 18.9265 16.673 18.362C17 17.7202 17 16.8802 17 15.2V8.8C17 7.11984 17 6.27976 16.673 5.63803C16.3854 5.07354 15.9265 4.6146 15.362 4.32698C14.7202 4 13.8802 4 12.2 4H11.8C10.1198 4 9.27976 4 8.63803 4.32698C8.07354 4.6146 7.6146 5.07354 7.32698 5.63803C7 6.27976 7 7.11984 7 8.8V15.2C7 16.8802 7 17.7202 7.32698 18.362C7.6146 18.9265 8.07354 19.3854 8.63803 19.673C9.27976 20 10.1198 20 11.8 20Z"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>
                        <div class="ml-6 lg:ml-0 lg:mt-10">
                            <h3
                                class="text-xl font-bold text-textbase before:mb-2 before:block before:font-mono before:text-sm before:text-textbase">
                                Menunggu validasi
                            </h3>
                            <h4 class="mt-2 text-base text-textbase">Proses dilakukan oleh Admin</h4>
                        </div>
                    </li>
                    <li class="flex-start group relative flex lg:flex-col" data-aos="zoom-in" data-aos-delay="1000">
                        <span
                            class="absolute left-[18px] top-14 h-[calc(100%_-_32px)] w-px bg-gray-300 lg:right-0 lg:left-auto lg:top-[18px] lg:h-px lg:w-[calc(100%_-_72px)]"
                            aria-hidden="true"></span>
                        <div
                            class="inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-xl border border-gray-300 bg-gray-50 transition-all duration-200 group-hover:border-white group-hover:bg-textbase">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-textbase group-hover:text-white">
                                <path
                                    d="M22 12C22 17.5228 17.5228 22 12 22M22 12C22 6.47715 17.5228 2 12 2M22 12C22 9.79086 17.5228 8 12 8C6.47715 8 2 9.79086 2 12M22 12C22 14.2091 17.5228 16 12 16C6.47715 16 2 14.2091 2 12M12 22C6.47715 22 2 17.5228 2 12M12 22C14.2091 22 16 17.5228 16 12C16 6.47715 14.2091 2 12 2M12 22C9.79086 22 8 17.5228 8 12C8 6.47715 9.79086 2 12 2M2 12C2 6.47715 6.47715 2 12 2"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>
                        <div class="ml-6 lg:ml-0 lg:mt-10">
                            <h3
                                class="text-xl font-bold text-textbase before:mb-2 before:block before:font-mono before:text-sm before:text-gray-500">
                                Pengajuan divalidasi
                            </h3>
                            <h4 class="mt-2 text-base text-textbase">Selamat Anda berhasil jadi partner kami</h4>
                        </div>
                    </li>
                    <li class="flex-start group relative flex lg:flex-col" data-aos="zoom-in" data-aos-delay="1500">
                        <div
                            class="inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-xl border border-gray-300 bg-gray-50 transition-all duration-200 group-hover:border-white group-hover:bg-textbase">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600 group-hover:text-white">
                                <path
                                    d="M5.50049 10.5L2.00049 7.9999L3.07849 6.92193C3.964 6.03644 4.40676 5.5937 4.9307 5.31387C5.39454 5.06614 5.90267 4.91229 6.42603 4.86114C7.01719 4.80336 7.63117 4.92617 8.85913 5.17177L10.5 5.49997M18.4999 13.5L18.8284 15.1408C19.0742 16.3689 19.1971 16.983 19.1394 17.5743C19.0883 18.0977 18.9344 18.6059 18.6867 19.0699C18.4068 19.5939 17.964 20.0367 17.0783 20.9224L16.0007 22L13.5007 18.5M7 16.9998L8.99985 15M17.0024 8.99951C17.0024 10.1041 16.107 10.9995 15.0024 10.9995C13.8979 10.9995 13.0024 10.1041 13.0024 8.99951C13.0024 7.89494 13.8979 6.99951 15.0024 6.99951C16.107 6.99951 17.0024 7.89494 17.0024 8.99951ZM17.1991 2H16.6503C15.6718 2 15.1826 2 14.7223 2.11053C14.3141 2.20853 13.9239 2.37016 13.566 2.5895C13.1623 2.83689 12.8164 3.18282 12.1246 3.87469L6.99969 9C5.90927 10.0905 5.36406 10.6358 5.07261 11.2239C4.5181 12.343 4.51812 13.6569 5.07268 14.776C5.36415 15.3642 5.90938 15.9094 6.99984 16.9998V16.9998C8.09038 18.0904 8.63565 18.6357 9.22386 18.9271C10.343 19.4817 11.6569 19.4817 12.7761 18.9271C13.3643 18.6356 13.9095 18.0903 15 16.9997L20.1248 11.8745C20.8165 11.1827 21.1624 10.8368 21.4098 10.4331C21.6291 10.0753 21.7907 9.6851 21.8886 9.27697C21.9991 8.81664 21.9991 8.32749 21.9991 7.34918V6.8C21.9991 5.11984 21.9991 4.27976 21.6722 3.63803C21.3845 3.07354 20.9256 2.6146 20.3611 2.32698C19.7194 2 18.8793 2 17.1991 2Z"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>
                        <div class="ml-6 lg:ml-0 lg:mt-10">
                            <h3
                                class="text-xl font-bold text-textbase before:mb-2 before:block before:font-mono before:text-sm before:text-gray-500">
                                Mulai berjualan!
                            </h3>
                            <h4 class="mt-2 text-base text-textbase">Sebarluaskan pasar ternak Anda
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <div class="py-24 px-8 lg:px-20 max-w-full mx-auto flex flex-col md:flex-row gap-12">
            <div class="flex flex-col text-left basis-1/2" data-aos="fade-right">
                <p class="inline-block text-textbase font-semibold text-primary mb-4">Pertanyaan dari calon Partner</p>
                <p class="sm:text-4xl text-4xl text-textbase font-bold text-base-content">Paling sering ditanyakan</p>
            </div>
            <ul class="basis-1/2" data-aos="fade-left">
                <li>
                    <button
                        class="relative flex gap-2 items-center w-full py-5 text-base font-semibold text-left border-t md:text-lg border-base-content/10"
                        aria-expanded="false" onclick="toggleFAQ(this)">
                        <span class="flex-1 text-textbase text-base-content">Bagaimana cara mendaftar sebagai mitra penjual
                            di platform ini? </span>
                        <svg class="flex-shrink-0 w-4 h-4 ml-auto fill-current" viewBox="0 0 16 16"
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
                            <div class="space-y-2 leading-relaxed">Anda dapat mendaftar sebagai mitra penjual melalui
                                halaman pendaftaran di website kami. Isi formulir pendaftaran dan tim kami akan menghubungi
                                Anda untuk proses verifikasi dan onboarding</div>
                        </div>
                    </div>
                </li>
                <li>
                    <button
                        class="relative flex gap-2 items-center w-full py-5 text-base font-semibold text-left border-t md:text-lg border-base-content/10"
                        aria-expanded="false" onclick="toggleFAQ(this)">
                        <span class="flex-1 text-textbase text-base-content">Apa saja syarat untuk menjadi mitra penjual di
                            platform ini?
                        </span>
                        <svg class="flex-shrink-0 w-4 h-4 ml-auto fill-current" viewBox="0 0 16 16"
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
                            <div class="space-y-2 leading-relaxed">Kami memerlukan mitra penjual untuk memiliki izin usaha
                                yang sah dan mematuhi standar kualitas serta kebersihan yang ditetapkan. Dokumen pendukung
                                akan diperiksa selama proses pendaftaran.
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <button
                        class="relative flex gap-2 items-center w-full py-5 text-base font-semibold text-left border-t md:text-lg border-base-content/10"
                        aria-expanded="false" onclick="toggleFAQ(this)">
                        <span class="flex-1 text-textbase text-base-content">Bagaimana cara saya mengelola daftar properti
                            yang saya jual?</span>
                        <svg class="flex-shrink-0 w-4 h-4 ml-auto fill-current" viewBox="0 0 16 16"
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
                            <div class="space-y-2 leading-relaxed">Setelah menjadi mitra penjual, Anda akan mendapatkan
                                akses ke dashboard khusus di platform kami. Di dashboard tersebut, Anda dapat menambah,
                                mengedit, atau menghapus daftar properti Anda, serta mengelola informasi terkait harga dan
                                deskripsi</div>
                        </div>
                    </div>
                </li>
                <li>
                    <button
                        class="relative flex gap-2 items-center w-full py-5 text-base font-semibold text-left border-t md:text-lg border-base-content/10"
                        aria-expanded="false" onclick="toggleFAQ(this)">
                        <span class="flex-1 text-textbase text-base-content">Apakah ada biaya pendaftaran atau biaya
                            bulanan untuk menjadi mitra penjual?
                        </span>
                        <svg class="flex-shrink-0 w-4 h-4 ml-auto fill-current" viewBox="0 0 16 16"
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
                            <div class="space-y-2 leading-relaxed">Kami tidak mengenakan biaya pendaftaran atau biaya
                                bulanan. Namun, kami akan mengambil komisi dari setiap transaksi yang berhasil dilakukan
                                melalui platform kami.
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <button
                        class="relative flex gap-2 items-center w-full py-5 text-base font-semibold text-left border-t md:text-lg border-base-content/10"
                        aria-expanded="false" onclick="toggleFAQ(this)">
                        <span class="flex-1 text-textbase text-base-content">Bagaimana proses pembayaran dilakukan untuk
                            transaksi yang berhasil?</span>
                        <svg class="flex-shrink-0 w-4 h-4 ml-auto fill-current" viewBox="0 0 16 16"
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
                            <div class="space-y-2 leading-relaxed">Pembayaran untuk transaksi akan dilakukan diluar sistem
                                sesuai kesepakatan antara penjual dan pembeli</div>
                        </div>
                    </div>
                </li>
                <li>
                    <button
                        class="relative flex gap-2 items-center w-full py-5 text-base font-semibold text-left border-t md:text-lg border-base-content/10"
                        aria-expanded="false" onclick="toggleFAQ(this)">
                        <span class="flex-1 text-textbase text-base-content">Apakah saya bisa menentukan harga jual untuk
                            properti yang saya tawarkan? </span>
                        <svg class="flex-shrink-0 w-4 h-4 ml-auto fill-current" viewBox="0 0 16 16"
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
                            <div class="space-y-2 leading-relaxed">Ya, sebagai mitra penjual, Anda memiliki kebebasan penuh
                                untuk menentukan harga jual properti yang Anda tawarkan. Kami mendorong Anda untuk
                                menetapkan harga yang kompetitif sesuai dengan nilai pasar</div>
                        </div>
                    </div>
                </li>
                <li>
                    <button
                        class="relative flex gap-2 items-center w-full py-5 text-base font-semibold text-left border-t md:text-lg border-base-content/10"
                        aria-expanded="false" onclick="toggleFAQ(this)">
                        <span class="flex-1 text-textbase text-base-content">Apakah platform ini menyediakan dukungan
                            pemasaran untuk mitra penjual? </span>
                        <svg class="flex-shrink-0 w-4 h-4 ml-auto fill-current" viewBox="0 0 16 16"
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
                            <div class="space-y-2 leading-relaxed">Ya, kami menyediakan dukungan pemasaran dan promosi
                                untuk mitra penjual, termasuk fitur-fitur promosi di platform kami dan bantuan dalam
                                strategi pemasaran untuk meningkatkan visibilitas dan penjualan properti Anda</div>
                        </div>
                    </div>
                </li>
                <li>
                    <button
                        class="relative flex gap-2 items-center w-full py-5 text-base font-semibold text-left border-t md:text-lg border-base-content/10"
                        aria-expanded="false" onclick="toggleFAQ(this)">
                        <span class="flex-1 text-textbase text-base-content">Apakah mitra penjual dapat menjual properti
                            yang berada di luar wilayah operasional saat ini?</span>
                        <svg class="flex-shrink-0 w-4 h-4 ml-auto fill-current" viewBox="0 0 16 16"
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
                            <div class="space-y-2 leading-relaxed">
                                Kami terbuka untuk bekerja sama dengan mitra penjual dari berbagai wilayah. Jika properti
                                Anda berada di luar wilayah operasional saat ini, silakan hubungi tim kami untuk
                                mendiskusikan kemungkinan kerja sama dan pengaturan logistik.</div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <script>
        function toggleFAQ(button) {
            const content = button.nextElementSibling;
            button.setAttribute("aria-expanded", button.getAttribute("aria-expanded") === "false" ? "true" : "false");
            content.style.maxHeight = button.getAttribute("aria-expanded") === "true" ? content.scrollHeight + "px" : "0";
        }
        // Faq
        document.addEventListener("alpine:init", () => {
            Alpine.store("accordion", {
                tab: 0
            });

            Alpine.data("accordion", (idx) => ({
                init() {
                    this.idx = idx;
                },
                idx: -1,
                handleClick() {
                    this.$store.accordion.tab =
                        this.$store.accordion.tab === this.idx ? 0 : this.idx;
                },
                handleRotate() {
                    return this.$store.accordion.tab === this.idx ? "-rotate-180" : "";
                },
                handleToggle() {
                    return this.$store.accordion.tab === this.idx ?
                        `max-height: ${this.$refs.tab.scrollHeight}px` :
                        "";
                }
            }));
        });
        //  end faq
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @push('js')
        <script>
            $(document).ready(function() {
                $(window).scroll(function() {
                    var scrollPosition = $(window).scrollTop();
                    var blurTriggerPosition = 200;

                    // Menambahkan atau menghapus kelas blur sesuai dengan posisi scroll
                    if (scrollPosition > blurTriggerPosition) {
                        $('.sticky').addClass('blurred-background');
                    } else {
                        $('.sticky').removeClass('blurred-background');
                    }
                });
            });
        </script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @endpush
@endsection
