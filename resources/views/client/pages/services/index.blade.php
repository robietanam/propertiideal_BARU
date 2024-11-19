@extends('includes.app')

@section('title', 'Properti Ideal')

@section('content')
    <div class="bg-white min-h-screen">

        <div class="flex flex-col px-6 md:px-16 py-16 gap-12 md:gap-24 bg-white">
            <div class="flex flex-col gap-3 text-center items-center" data-aos="zoom-in">
                <p class="text-2xl md:text-4xl font-semibold text-black">Menyediakan Layanan</p>
                <p class="text-2xl md:text-4xl font-semibold text-primarybase"> Sesuai Kebutuhan Anda</p>
                <p class="text-sm text-black">Jual properti, beli properti dengan berbagai layanan yang tersedia di Properti
                    Ideal.</p>
            </div>
            <div class="grid grid-cols-2 gap-12 px-6 md:gap-20 md:px-10 justify-center">
                <div data-aos="flip-left" class="max-md:col-span-2">
                    <div
                        class="relative flex flex-col text-center border rounded-3xl gap-3 pt-12 pb-6 px-6 w-full hover:cursor-pointer hover:scale-110 transition-transform ease-in-out">
                        <img src="{{ asset('img/icons/properti-ideal-dark-icon.svg') }}"
                            class="absolute w-14 aspect-square left-1/2 -translate-x-1/2 -top-5" alt="Icon Propertiideal">
                        <p class="text-xl font-semibold text-black">Properti Solution</p>
                        <p class="text-base text-black">Properti Ideal berkomitmen menyediakan layanan yang disesuaikan
                            dengan
                            kebutuhan Anda,
                            mulai dari pembangunan rumah, renovasi, hingga desain interior, dengan solusi lengkap dari tim
                            profesional kami.</p>
                        <p class="text-base font-semibold text-primary-blue underline">Jelajahi Sekarang</p>
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
                            memastikan pengalaman yang memuaskan dan hasil sesuai harapan. Bergabunglah dengan kami dan
                            temukan
                            hunian impian Anda sekarang!</p>
                        <p class="text-base font-semibold text-primary-blue">Jelajai Sekarang</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="flex mx-auto justify-center">
            <section class="bg-white px-10">
                <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
                    <div class="mr-auto place-self-center lg:col-span-7">
                        <h1 class="text-textbase max-w-2xl mb-4 text-6xl font-bold leading-none md:text-5xl xl:text-6xl">
                            Berbagai produk yang tersedia di Properti Ideal</h1>
                        <p class="text-textbase max-w-2xl mb-6 font-semibold lg:mb-8 md:text-xl lg:text-2xl">
                            Temukan segala jenis properti dengan proses mudah di Properti Ideal</p>
                    </div>
                    <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                        <img src="https://kfmap.asia/storage/uploads/shares/Monicha-Article/thumbnail/28%20Jun/1649073890477_74_11062021-zam-bisnis-18-perumahan-1_8670.jpg"
                            alt="mockup">
                    </div>
                </div>
            </section>
        </div>
        <div class="flex mx-auto justify-center">
            <section class="bg-white px-10">
                <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
                    <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                        <img src="https://www.cekpremi.com/blog/wp-content/uploads/2021/05/jual-beli-properti.jpg"
                            alt="mockup">
                    </div>
                    <div class="ml-auto place-self-center lg:col-span-7">
                        <h1 class="text-textbase max-w-2xl mb-4 text-6xl font-bold leading-none md:text-5xl xl:text-6xl">
                            Pengelolaan properti secara online</h1>
                        <p class="text-textbase max-w-2xl mb-6 font-semibold lg:mb-8 md:text-xl lg:text-2xl">
                            Jual dan beli properti dengan aman dan cepat di PropertiIdeal</p>
                    </div>
                </div>
            </section>
        </div>
    </div> --}}

        {{-- <div class="py-5 ">
        <div class="container flex flex-col items-center justify-center w-full p-6 mx-auto text-center xl:px-0">
            <div class="text-lg font-bold tracking-wider text-indigo-600 ">Testimoni</div>
            <h2
                class="max-w-2xl mt-3 text-3xl font-bold leading-snug tracking-tight text-gray-800 lg:leading-tight lg:text-4xl ">
                Apa yang customer kami katakan?</h2>
            <p class="max-w-2xl py-4 text-lg leading-normal text-gray-500 lg:text-xl xl:text-xl ">Ini adalah beberapa
                testimoni dari pengguna atau customer yang telah menggunakan platform kami</p>
        </div>
        <div class="container p-6 mx-auto mb-10 xl:px-0">
            <div class="grid gap-10 lg:grid-cols-2 xl:grid-cols-3">
                <div class="lg:col-span-2 xl:col-auto">
                    <div
                        class="flex flex-col justify-between w-full h-full px-6 py-6 bg-gray-100 md:px-14 rounded-2xl md:py-14">
                        <p class="text-2xl leading-normal">"Berkat <mark
                                class="mx-1 text-indigo-800 bg-indigo-100 rounded-md ring-indigo-100 ring-4">Properti
                                Ideal</mark> telah mengubah segalanya. Tim mereka membuat proses penjualan menjadi lancar
                            dan bebas stres. Saya menjual properti saya dalam waktu singkat!"</p>
                        <div class="flex items-center mt-8 space-x-3">
                            <div class="flex-shrink-0 overflow-hidden rounded-full w-14 h-14">
                                <img alt="Avatar"
                                    src="https://images.unsplash.com/photo-1511485977113-f34c92461ad9?crop=faces&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwxfDB8MXxhbGx8fHx8fHx8fHwxNjIwMTQ5ODEx&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=100&amp;h=100"
                                    loading="lazy" />
                            </div>
                            <div>
                                <div class="text-lg font-medium text-gray-900">Rina Suryani</div>
                                <div class="text-gray-600">Manager Penjualan di PT. ABC</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div
                        class="flex flex-col justify-between w-full h-full px-6 py-6 bg-gray-100 md:px-14 rounded-2xl md:py-14">
                        <p class="text-2xl leading-normal">"Berkat <mark
                                class="mx-1 text-indigo-800 bg-indigo-100 rounded-md ring-indigo-100 ring-4">Properti
                                Ideal</mark>, saya menemukan rumah impian saya dengan mudah. Daftar properti mereka yang
                            luas dan layanan yang penuh perhatian sangat membantu."</p>
                        <div class="flex items-center mt-8 space-x-3">
                            <div class="flex-shrink-0 overflow-hidden rounded-full w-14 h-14">
                                <img alt="Avatar"
                                    src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;crop=faces&amp;fit=crop&amp;w=100&amp;h=100&amp;q=80"
                                    loading="lazy" />
                            </div>
                            <div>
                                <div class="text-lg font-medium text-gray-900">Joko Widodo</div>
                                <div class="text-gray-600">Direktur Utama di PT. DEF</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div
                        class="flex flex-col justify-between w-full h-full px-6 py-6 bg-gray-100 md:px-14 rounded-2xl md:py-14">
                        <p class="text-2xl leading-normal">"Saya sangat merekomendasikan <mark
                                class="mx-1 text-indigo-800 bg-indigo-100 rounded-md ring-indigo-100 ring-4">Properti
                                Ideal</mark> untuk layanan dan profesionalisme mereka yang luar biasa. Mereka membantu saya
                            mendapatkan properti sewaan yang sempurna dalam waktu singkat."</p>
                        <div class="flex items-center mt-8 space-x-3">
                            <div class="flex-shrink-0 overflow-hidden rounded-full w-14 h-14">
                                <img alt="Avatar"
                                    src="https://images.unsplash.com/photo-1624224971170-2f84fed5eb5e?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=100&amp;h=100&amp;crop=faces&amp;q=80"
                                    loading="lazy" />
                            </div>
                            <div>
                                <div class="text-lg font-medium text-gray-900">Ayu Pratiwi</div>
                                <div class="text-gray-600">CEO di PT. GHI</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div> --}}

        <div class="grid grid-cols-2 place-items-center px-6 md:px-16 pb-8 pt-16 md:justify-between gap-10 bg-white">

            <img data-aos="zoom-in" src="{{ asset('img/assets/beranda-img1.png') }}"
                class="max-md:col-span-2 rounded-lg w-full aspect-video object-cover">
            {{-- <img data-aos="zoom-in" src="{{ asset('img/assets/beranda-img1.png') }}"
            class="max-md:col-span-2 rounded-lg w-full aspect-video object-cover" alt="Slide {{ $index }}"> --}}
            <div class="flex flex-col items-center md:items-start text-center md:text-left gap-3 max-md:col-span-2 ">
                <p data-aos="fade-right" class="text-2xl md:text-4xl font-semibold text-black">Pengenalan properti secara
                    online
                </p>
                <p data-aos="fade-right" class="text-sm text-black">Jual dan beli properti dengan aman dan cepat di Properti
                    Ideal.</p>
            </div>
        </div>

        <div class="grid grid-cols-2 place-items-center px-6 md:px-16 pb-8 pt-16 md:justify-between gap-10 bg-white">

            <img data-aos="zoom-in" src="{{ asset('img/assets/beranda-img1.png') }}"
                class="max-md:col-span-2 rounded-lg w-full aspect-video object-cover">
            {{-- <img data-aos="zoom-in" src="{{ asset('img/assets/beranda-img1.png') }}"
            class="max-md:col-span-2 rounded-lg w-full aspect-video object-cover" alt="Slide {{ $index }}"> --}}
            <div class="flex flex-col items-center md:items-start text-center md:text-left gap-3 max-md:col-span-2 ">
                <p data-aos="fade-right" class="text-2xl md:text-4xl font-semibold text-black">Pengenalan properti secara
                    online
                </p>
                <p data-aos="fade-right" class="text-sm text-black">Jual dan beli properti dengan aman dan cepat di Properti
                    Ideal.</p>
            </div>
        </div>

        <div class="grid grid-cols-1 py-16 px-6 md:px-16  items-center justify-center gap-4 bg-secondary-blue">
            <div class="max-md:col-span-2 flex flex-col items-center text-center gap-3 ">
                <p data-aos="zoom-out-down"
                    class="bg-primary-yellow text-secondary-blue text-base font-semibold py-[2px] px-6 w-fit rounded-full text-center">
                    Sosial Media</p>
                <p data-aos="zoom-out-right" class="text-2xl md:text-4xl font-semibold text-white">Ikuti Media Sosial Kami
                </p>
                <p data-aos="zoom-out-right" class="text-sm text-white">Ikuti dan pantau terus media sosial kami agar tidak
                    ketinggalan konten dan promo
                    menarik dari kami!</p>
                <button class="text-white px-4 py-2 border border-white rounded w-fit items-center flex gap-2"
                    data-aos="zoom-in-up">
                    <p class="text-sm font-semibold">Follow</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#f8f1f1"
                        viewBox="0 0 256 256">
                        <path
                            d="M128,80a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160ZM176,24H80A56.06,56.06,0,0,0,24,80v96a56.06,56.06,0,0,0,56,56h96a56.06,56.06,0,0,0,56-56V80A56.06,56.06,0,0,0,176,24Zm40,152a40,40,0,0,1-40,40H80a40,40,0,0,1-40-40V80A40,40,0,0,1,80,40h96a40,40,0,0,1,40,40ZM192,76a12,12,0,1,1-12-12A12,12,0,0,1,192,76Z">
                        </path>
                    </svg>
                </button>
            </div>
        </div>

        <script
            src="https://cdn.jsdelivr.net/gh/Loopple/loopple-public-assets@main/motion-tailwind/scripts/plugins/countup.min.js">
        </script>
        <script>
            let numbers = document.querySelectorAll("[countTo]");

            numbers.forEach((number) => {
                let ID = number.getAttribute("id");
                let value = number.getAttribute("countTo");
                let countUp = new CountUp(ID, value);

                if (number.hasAttribute("data-decimal")) {
                    const options = {
                        decimalPlaces: 1,
                    };
                    countUp = new CountUp(ID, 2.8, options);
                } else {
                    countUp = new CountUp(ID, value);
                }

                if (!countUp.error) {
                    countUp.start();
                } else {
                    console.error(countUp.error);
                    number.innerHTML = value;
                }
            });
        </script>
    @endsection
