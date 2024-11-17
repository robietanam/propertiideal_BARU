@extends('includes.app')

@section('title', 'Properti Ideal | Tentang')

@section('content')
    <section class="py-20 bg-white" x-data="{ animate: false }" x-init="setTimeout(() => animate = true, 800)">
        <div class="flex flex-col mx-auto space-y-12 max-w-full ">
            <div
                class="relative px-8 max-w-full xl:px-28 lg:px-24 md:px-20 sm:px-0 mx-auto flex flex-col gap-6 items-center justify-center ">
                <p class="text-primary-blue font-semibold text-center w-full" x-show="animate"
                    x-transition:enter="transform transition-transform duration-700"
                    x-transition:enter-start="-translate-y-full opacity-0" x-transition:enter-end="translate-y-0 opacity-100">
                    Mengenal Tentang Kami</p>
                <h2 class="w-full text-3xl font-bold text-center md:text-4xl" x-show="animate"
                    x-transition:enter="transform transition-transform duration-700 delay-200"
                    x-transition:enter-start="-translate-y-full opacity-0"
                    x-transition:enter-end="translate-y-0 opacity-100">Wujudkan Propeti Idealmu Bersama
                    Properti Ideal! 🤩</h2>
                <p class=" text-lg text-center text-gray-700 " x-show="animate"
                    x-transition:enter="transform transition-transform duration-1000 delay-500"
                    x-transition:enter-start="translate-y-full opacity-0"
                    x-transition:enter-end="translate-y-0 opacity-100">Dengan layanan
                    terintegrasi dan berbagai pilihan, kami siap membantu Anda menjual atau membeli properti dengan proses
                    yang mudah dan menyenangkan.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-10 bg-secondary-blue h-fit md:h-96 py-16 md:py-0 px-8 md:px-14">
                <div class="col-span-4 flex flex-col gap-4 self-center" x-show="animate"
                    x-transition:enter="transform  transition-transform duration-700"
                    x-transition:enter-start="-translate-x-full opacity-0"
                    x-transition:enter-end="translate-x-0 opacity-100">
                    <p
                        class="bg-primary-yellow text-secondary-blue text-base  font-semibold py-[2px] px-6 w-fit rounded-full text-center">
                        Layanan
                    </p>
                    <p class="text-3xl text-white font-bold">Layanan Kami</p>
                    <p class="text-sm text-white ">Segalanya lebih mudah dengan pelayanan yang maksimal.</p>
                </div>
                <div class="col-span-1 hidden relative md:flex justify-center items-center">
                    <div class="h-full w-0.5 border-l border-gray-300 border-dashed  opacity-50"></div>

                    <img x-show="animate" x-transition:enter="transform ease-out transition-transform duration-500"
                        x-transition:enter-start="scale-0 opacity-0" x-transition:enter-end="scale-100 opacity-100"
                        src="{{ asset('img/icons/properti-ideal-dark-icon.svg') }}"
                        class="absolute w-14 aspect-square top-[15%] -translate-y-[15%] border border-white rounded-full "
                        alt="Icon Propertiideal">

                    <img x-show="animate"
                        x-transition:enter="transform ease-out transition-transform duration-500 delay-700"
                        x-transition:enter-start="scale-0 opacity-0" x-transition:enter-end="scale-100 opacity-100"
                        src="{{ asset('img/icons/properti-ideal-dark-icon.svg') }}"
                        class="absolute w-14 aspect-square top-[65%] -translate-y-[65%] border border-white rounded-full "
                        alt="Icon Propertiideal">
                </div>
                <div class="col-span-5 px-0 md:px-8 py-8 flex flex-col gap-10">
                    <div x-show="animate" x-transition:enter="transform  transition-transform duration-500 delay-500"
                        x-transition:enter-start="translate-x-full opacity-0"
                        x-transition:enter-end="translate-x-0 opacity-100"
                        class="px-5 py-3 bg-white flex flex-col gap-4 rounded-b-2xl rounded-tr-3xl">
                        <p class="texl-xl font-semibold">Properti Solution</p>
                        <p class="text-sm text-justify ">Properti Ideal berkomitmen menyediakan layanan yang disesuaikan
                            dengan kebutuhan
                            Anda, mulai dari
                            pembangunan rumah, renovasi, hingga desain interior, dengan solusi lengkap dari tim profesional
                            kami.</p>
                    </div>
                    <div x-show="animate" x-transition:enter="transform  transition-transform duration-500 delay-1000"
                        x-transition:enter-start="translate-x-full opacity-0"
                        x-transition:enter-end="translate-x-0 opacity-100"
                        class="px-5 py-3 bg-white flex flex-col gap-4 rounded-b-2xl rounded-tr-3xl">
                        <p class="texl-xl font-semibold">Properti Ideal</p>
                        <p class="text-sm text-justify">Dari hunian luas hingga layanan yang memudahkan proses pembelian,
                            Properti Ideal memastikan pengalaman yang memuaskan dan hasil sesuai harapan. Bergabunglah
                            dengan kami dan temukan hunian impian Anda sekarang!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <div class="px-3 md:lg:xl:px-40   border-t border-b py-20 bg-opacity-10"
        style="background-image: url('https://www.toptal.com/designers/subtlepatterns/uploads/dot-grid.png') ;">
        <div class="grid grid-cols-1 md:lg:xl:grid-cols-3 group bg-white shadow-xl shadow-neutral-100 border ">


            <div
                class="p-10 flex flex-col items-center text-center group md:lg:xl:border-r md:lg:xl:border-b hover:bg-slate-50 cursor-pointer">
                <span class="p-5 rounded-full bg-red-500 text-white shadow-lg shadow-red-200"><svg
                        xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg></span>
                <p class="text-xl font-medium text-slate-700 mt-3">Most Experienced Team</p>
                <p class="mt-2 text-sm text-slate-500">Team BrainEdge education is a bunch of highly focused, energetic
                    set of people.</p>
            </div>

            <div
                class="p-10 flex flex-col items-center text-center group md:lg:xl:border-r md:lg:xl:border-b hover:bg-slate-50 cursor-pointer">
                <span class="p-5 rounded-full bg-orange-500 text-white shadow-lg shadow-orange-200"><svg
                        xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="1.5">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <line x1="16" y1="13" x2="8" y2="13"></line>
                        <line x1="16" y1="17" x2="8" y2="17"></line>
                        <polyline points="10 9 9 9 8 9"></polyline>
                    </svg></span>
                <p class="text-xl font-medium text-slate-700 mt-3">Best
                    Test preparation</p>
                <p class="mt-2 text-sm text-slate-500">Know where you stand and what next to do to succeed .</p>
            </div>

            <div
                class="p-10 flex flex-col items-center text-center group   md:lg:xl:border-b hover:bg-slate-50 cursor-pointer">
                <span class="p-5 rounded-full bg-yellow-500 text-white shadow-lg shadow-yellow-200"><svg
                        xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                    </svg></span>
                <p class="text-xl font-medium text-slate-700 mt-3">Admission process Guidance</p>
                <p class="mt-2 text-sm text-slate-500">Professional Advice for higher education abroad and select the
                    top institutions worldwide.</p>
            </div>


            <div
                class="p-10 flex flex-col items-center text-center group   md:lg:xl:border-r hover:bg-slate-50 cursor-pointer">
                <span class="p-5 rounded-full bg-lime-500 text-white shadow-lg shadow-lime-200"><svg
                        xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                    </svg></span>
                <p class="text-xl font-medium text-slate-700 mt-3">Best
                    Track Record</p>
                <p class="mt-2 text-sm text-slate-500">Yet another year ! Yet another jewel in our crown!</p>
            </div>

            <div
                class="p-10 flex flex-col items-center text-center group    md:lg:xl:border-r hover:bg-slate-50 cursor-pointer">
                <span class="p-5 rounded-full bg-teal-500 text-white shadow-lg shadow-teal-200"><svg
                        xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                    </svg></span>
                <p class="text-xl font-medium text-slate-700 mt-3">Free
                    Mock Exams</p>
                <p class="mt-2 text-sm text-slate-500">Get Topic-Wise Tests, Section- Wise and mock tests for your
                    preparation.</p>
            </div>

            <div class="p-10 flex flex-col items-center text-center group     hover:bg-slate-50 cursor-pointer">
                <span class="p-5 rounded-full bg-indigo-500 text-white shadow-lg shadow-indigo-200"><svg
                        xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg></span>
                <p class="text-xl font-medium text-slate-700 mt-3">Genuine
                    Visa Advice</p>
                <p class="mt-2 text-sm text-slate-500">Visa process by helping you create the necessary documentation
                </p>
            </div>
        </div>

        <div class="w-full   bg-indigo-600 shadow-xl shadow-indigo-200 py-10 px-20 flex justify-between items-center">
            <p class=" text-white"> <span class="text-4xl font-medium">Still Confused ?</span> <br> <span
                    class="text-lg">Book For Free Career Consultation Today ! </span></p>
            <button
                class="px-5 py-3  font-medium text-slate-700 shadow-xl  hover:bg-white duration-150  bg-yellow-400">BOOK AN
                APPOINTMENT </button>
        </div>
    </div> --}}

    <div class="text-white mt-24 container mx-auto px-6 md:px-8 py-8 overflow-hidden md:rounded-lg md:p-10 lg:p-12">
        <div class="mx-auto px-0 md:px-4">
            <div class="mb-4 flex items-center justify-between gap-8 sm:mb-8 md:mb-12 flex-col">
                <div class="flex items-center flex-col" data-aos="zoom-in-down">
                    <h2 class="text-4xl md:text-6xl font-bold text-gray-800 lg:text-6xl">Dokumentasi Properti Ideal</h2>
                    <p class="max-w-screen text-xl mt-3 text-gray-500 ">
                        Ini adalah aktivitas, kemitraan, produk, penjalanan, dan sejarah dari Properti Ideal
                    </p>
                </div>

            </div>

            <div data-aos="zoom-in-right" class="grid grid-cols-1 md:grid-cols-3 gap-4 sm:grid-cols-3 md:gap-6 xl:gap-8">
                <!-- image - start -->
                <a href="#"
                    class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
                    <img src="https://infobanknews.com/wp-content/uploads/2022/08/IMG-20220822-WA0005.jpg" loading="lazy"
                        alt="Photo by Minh Pham"
                        class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                    <div
                        class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                    </div>

                    <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Ruko</span>
                </a>
                <!-- image - end -->

                <!-- image - start -->
                <a href="#"
                    class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:col-span-2 md:h-80">
                    <img src="https://cdn1.katadata.co.id/media/images/thumb/2019/10/17/2019_10_17-11_04_43_b9ae64f66fbf0ac902ffbb274781d73c_960x640_thumb.jpg"
                        loading="lazy" alt="Photo by Magicle"
                        class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                    <div
                        class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                    </div>

                    <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Kos</span>
                </a>
                <!-- image - end -->

                <!-- image - start -->
                <a href="#"
                    class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:col-span-2 md:h-80">
                    <img src="https://www.bonafide.co.id/wp-content/uploads/2021/05/Apartemen.jpg" loading="lazy"
                        alt="Photo by Martin Sanchez"
                        class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                    <div
                        class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                    </div>

                    <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Apartement</span>
                </a>
                <!-- image - end -->

                <!-- image - start -->
                <a href="#"
                    class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZnqLF2g3YXCuMvnojsy16b-h-PhDUf2Vtrg&s"
                        loading="lazy" alt="Photo by Lorenzo Herrera"
                        class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                    <div
                        class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                    </div>

                    <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Rumah</span>
                </a>
                <!-- image - end -->
            </div>
        </div>

        <div class="py-24 px-0 md:px-8 lg:px-20 max-w-full mx-auto flex flex-col md:flex-row gap-12">
            <div data-aos="zoom-in" class="flex flex-col text-left basis-1/2">
                <p class="inline-block text-textbase font-semibold text-primary mb-4">Pertanyaan dari calon Partner</p>
                <p class="sm:text-4xl text-4xl text-textbase font-bold text-base-content">Paling sering ditanyakan</p>
            </div>
            <ul class="basis-1/2" data-aos="zoom-in">
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

        <script>
            function toggleFAQ(button) {
                const content = button.nextElementSibling;
                button.setAttribute("aria-expanded", button.getAttribute("aria-expanded") === "false" ? "true" : "false");
                content.style.maxHeight = button.getAttribute("aria-expanded") === "true" ? content.scrollHeight + "px" : "0";
            }
        </script>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
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
    @endpush
@endsection
