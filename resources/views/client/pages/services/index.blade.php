@extends('includes.app')

@section('title', 'Properti Ideal')

@section('content')
    <div class="bg-white relative overflow-x-hidden">
        <img src="{{ asset('img/assets/assets-1.svg') }}" alt="bulet"
            class="absolute top-0 right-0 translate-x-1/2 -translate-y-1/2 ">
        <img src="{{ asset('img/assets/assets-1.svg') }}" alt="bulet"
            class="absolute top-0 left-0 -translate-x-1/2 -translate-y-1/2 max-md:hidden">
        <div class="relative flex flex-col px-6 md:px-16 py-16 gap-12 md:gap-24 ">
            <div class="flex flex-col gap-3 text-center items-center" data-aos="zoom-in">
                <p class="text-2xl md:text-4xl font-semibold text-black">Menyediakan Layanan</p>
                <p class="text-2xl md:text-4xl font-semibold text-primarybase"> Sesuai Kebutuhan Anda</p>
                <p class="text-sm text-black">Jual properti, beli properti dengan berbagai layanan yang tersedia di Properti
                    Ideal.</p>
            </div>
            <div class="grid grid-cols-2 gap-12 px-6 md:gap-20 md:px-20 justify-center">
                <div data-aos="flip-left" class="max-md:col-span-2">
                    <a href="/layanan/propertisolution"
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
                    </a>
                </div>
                <div data-aos="flip-right" class="max-md:col-span-2">
                    <a href="/layanan/propertiideal"
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
                        <p class="text-base font-semibold text-primary-blue underline">Jelajahi Sekarang</p>
                    </a>
                </div>
            </div>
        </div>

        <div
            class=" flex flex-row max-md:flex-col place-items-center px-6 md:px-16 h-fit md:justify-between gap-10 bg-white py-10 ">

            <div class="w-full overflow-hidden p-8">
                <img src="{{ asset('img/assets/beranda-img1.png') }}" class="w-full aspect-square object-cover rounded-lg ">
            </div>
            <div class="w-full flex flex-col items-center md:items-start text-center md:text-left gap-5 max-md:col-span-2 ">
                <p data-aos="fade-right" class="text-2xl md:text-4xl font-semibold text-black ">Berbagai produk yang
                    tersedia
                    di Properti Ideal
                </p>
                <p data-aos="fade-right" class="text-sm text-black">Temukan segala jenis properti dengan proses mudah di
                    Properti Ideal.</p>
                <div id="splide" class="splide !bg-transparent overflow-hidden rounded-lg">
                    <div class="splide__track ">
                        <ul class="splide__list">
                            @foreach (range(1, 10) as $index)
                                <li class="splide__slide ">
                                    <div class="bg-white w-full h-full rounded-lg overflow-hidden">
                                        <img src="{{ asset('img/assets/beranda-img1.png') }}"
                                            class="w-full h-full object-cover" alt="Slide {{ $index }}">
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=" flex flex-row place-items-center px-6 md:px-16 h-full md:justify-between gap-10 bg-white py-10 ">
            <div class="w-full flex flex-col items-center md:items-start text-center md:text-left gap-5 max-md:col-span-2 ">
                <p data-aos="fade-right" class="text-2xl md:text-4xl font-semibold text-black ">Pengenalan properti secara
                    online
                </p>
                <p data-aos="fade-right" class="text-sm text-black">Jual dan beli properti dengan aman dan cepat di Properti
                    Ideal.</p>
            </div>

            <div class="w-full overflow-hidden p-8">
                <img src="{{ asset('img/assets/beranda-hero.jpg') }}" class="w-full aspect-square object-cover rounded-lg">
            </div>
        </div>


        <div class="grid grid-cols-1 py-12 px-6 md:px-16  items-center justify-center gap-4 bg-secondary-blue">
            <div class="max-md:col-span-2 flex flex-col items-center text-center gap-6">
                <p data-aos="zoom-out-down" class="text-primary-yellow font-semibold text-lg">
                    Testimoni</p>
                <p data-aos="zoom-out-right" class="text-2xl md:text-4xl font-semibold text-white">Apa yang customer kami
                    katakan?
                </p>
                <p data-aos="zoom-out-right" class="text-sm text-white">Ini adalah beberapa testimoni dari pengguna atau
                    customer yang telah menggunakan platform kami.</p>
                <div id="splide-testimoni1" class="splide !bg-transparent overflow-hidden rounded-lg">
                    <div class="splide__track ">
                        <ul class="splide__list">
                            @foreach (range(1, 10) as $index)
                                <li class="splide__slide ">
                                    <div class="w-full bg-white h-full rounded-lg overflow-hidden p-5 flex flex-col gap-2">
                                        <p class="h-full text-justify text-sm">“Berkat Properti Ideal telah mengubah
                                            segalanya. Tim
                                            meraka
                                            membuat proses
                                            penjualan menjadi lancar dan bebas stres. Saya menjual properti saya dalam waktu
                                            signkat!”</p>
                                        <div class="flex flex-row gap-2">
                                            <div class="w-14 aspect-square bg-gray-400 rounded-full">
                                            </div>
                                            <div class="w-full flex flex-col gap-2 justify-start items-start text-sm">
                                                <p class="font-semibold ">Rina Suryani</p>
                                                <p>Manager Penjualan di PT.ABC</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div id="splide-testimoni2" class="splide !bg-transparent overflow-hidden rounded-lg">
                    <div class="splide__track ">
                        <ul class="splide__list">
                            @foreach (range(1, 10) as $index)
                                <li class="splide__slide ">
                                    <div class="w-full bg-white h-full rounded-lg overflow-hidden p-5 flex flex-col gap-2">
                                        <p class="h-full text-justify text-sm">“Berkat Properti Ideal telah mengubah
                                            segalanya. Tim
                                            meraka
                                            membuat proses
                                            penjualan menjadi lancar dan bebas stres. Saya menjual properti saya dalam waktu
                                            signkat!”</p>
                                        <div class="flex flex-row gap-2">
                                            <div class="w-14 aspect-square bg-gray-400 rounded-full">
                                            </div>
                                            <div class="w-full flex flex-col gap-2 justify-start items-start text-sm">
                                                <p class="font-semibold ">Rina Suryani</p>
                                                <p>Manager Penjualan di PT.ABC</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <script
            src="https://cdn.jsdelivr.net/gh/Loopple/loopple-public-assets@main/motion-tailwind/scripts/plugins/countup.min.js">
        </script>
        @push('js')
            @vite('resources/js/layanan.js')
        @endpush
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
