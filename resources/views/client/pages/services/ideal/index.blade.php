@extends('includes.app')

@section('title', 'Properti Ideal | Layanan')

@section('content')
    <div class="bg-white min-h-screen">

        <div class="flex flex-col px-6 md:px-16 py-16 gap-12 md:gap-24 bg-white">
            <div class="flex flex-col gap-3 text-center items-center" data-aos="zoom-in">
                <p class="bg-primary-blue text-white text-base font-semibold py-[2px] px-6 w-fit rounded-full">Properti
                    Layanan</p>
                <p class="text-2xl md:text-4xl font-semibold text-black">Menyediakan Layanan</p>
                <p class="text-2xl md:text-4xl font-semibold text-primary-blue">Sesuai Kebutuhan Anda</p>
                <p class="text-sm text-black">Temukan berbagai propeti yang terbaik dengan pelayanan cepat dan terpercaya.
                </p>
            </div>
            <div class="grid grid-cols-2 gap-12 px-6 md:gap-20 md:px-10 justify-center">
                <div data-aos="flip-left" class="max-md:col-span-2">
                    <div
                        class="relative flex flex-col text-center border rounded-3xl gap-3 pt-12 pb-6 px-6 w-full hover:cursor-pointer hover:scale-110 transition-transform ease-in-out">
                        <img src="{{ asset('img/icons/properti-ideal-dark-icon.svg') }}"
                            class="absolute w-14 aspect-square left-1/2 -translate-x-1/2 -top-5" alt="Icon Propertiideal">
                        <p class="text-xl font-semibold text-black">Jual properti</p>
                        <p class="text-base text-black">Jual properti Anda juga semudah 1-2-3! Buat akun, unggah properti
                            Anda, dan biarkan kami membantu menjangkau pembeli potensial.</p>
                        <a href="/jual" class="text-base font-semibold text-primary-blue underline">Jelajahi Sekarang</a>
                    </div>
                </div>
                <div data-aos="flip-right" class="max-md:col-span-2">
                    <div
                        class="relative flex flex-col text-center border rounded-3xl gap-3 pt-12 pb-6 px-6 w-full hover:cursor-pointer hover:scale-110 transition-transform ease-in-out">

                        <img src="{{ asset('img/icons/properti-ideal-dark-icon.svg') }}"
                            class="absolute w-14 aspect-square left-1/2 -translate-x-1/2 -top-5" alt="Icon Propertiideal">
                        <p class="text-xl font-semibold text-black">Beli Properti</p>
                        <p class="text-base text-black">Temukan properti sesuai keinginan dengan fitur pencarian canggih
                            kami. Pilih berdasarkan lokasi, harga, tipe properti, hingga fasilitas favorit Anda!</p>
                        <a href="/beli" class="text-base font-semibold text-primary-blue">Jelajai
                            Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script
        src="https://cdn.jsdelivr.net/gh/Loopple/loopple-public-assets@main/motion-tailwind/scripts/plugins/countup.min.js">
    </script>
@endsection
