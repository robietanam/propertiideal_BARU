@extends('includes.app')

@section('title', 'Properti Ideal | Solution')

@section('content')
    <div class="bg-white relative overflow-x-hidden" x-data="{ animate: false }" x-init="setTimeout(() => animate = true, 800)">

        <img src="{{ asset('img/assets/assets-1.svg') }}" alt="bulet"
            class="absolute top-0 right-0 translate-x-1/2 -translate-y-1/2 ">
        <img src="{{ asset('img/assets/assets-1.svg') }}" alt="bulet"
            class="absolute top-0 left-0 -translate-x-1/2 -translate-y-1/2 max-md:hidden">
        <div class="flex flex-col px-6 md:px-16 py-16 gap-12 md:gap-24 bg-white">
            <div class="flex flex-col gap-3 text-center items-center" data-aos="zoom-in">
                <p x-show="animate" x-transition:enter="transform transition-transform duration-700"
                    x-transition:enter-start="-translate-y-full opacity-0"
                    x-transition:enter-end="translate-y-0 opacity-100"
                    class="bg-primary-blue text-white text-base font-semibold py-[2px] px-6 w-fit rounded-full">Properti
                    Solution</p>
                <p x-show="animate" x-transition:enter="transform transition-transform duration-700"
                    x-transition:enter-start="-translate-x-full opacity-0"
                    x-transition:enter-end="translate-x-0 opacity-100"
                    class="text-2xl md:text-4xl font-semibold text-black">Menyediakan Layanan</p>
                <p x-show="animate" x-transition:enter="transform transition-transform duration-700"
                    x-transition:enter-start="translate-x-full opacity-0" x-transition:enter-end="translate-x-0 opacity-100"
                    class="text-2xl md:text-4xl font-semibold text-primary-blue">Sesuai Kebutuhan Anda</p>
                <p x-show="animate" x-transition:enter="transform transition-transform duration-700"
                    x-transition:enter-start="translate-y-full opacity-0" x-transition:enter-end="translate-y-0 opacity-100"
                    class="text-sm text-black">Temukan berbagai propeti yang terbaik dengan pelayanan cepat dan terpercaya.
                </p>
            </div>
            <div id="cards" class="grid grid-cols-2 gap-12 px-6 md:gap-20 md:px-10 justify-center">
                <div data-aos="flip-left" class="max-md:col-span-2">
                    <div
                        class="relative bg-secondary-blue flex flex-col text-center border rounded-3xl gap-3 pt-12 pb-6 px-6 w-full hover:cursor-pointer hover:scale-110 transition-transform ease-in-out">
                        <img src="{{ asset('img/icons/properti-ideal-light-icon.svg') }}"
                            class="absolute w-14 aspect-square left-1/2 -translate-x-1/2 -top-5" alt="Icon Propertiideal">
                        <p class="text-xl font-semibold text-white">Solusi Pembangunan & Renovasin</p>
                        <p class="text-base text-white">Dengan Properti Ideal, Anda mendapatkan layanan pembangunan dan
                            renovasi yang menyeluruh – mulai dari perencanaan, desain, hingga eksekusi, semua dilakukan oleh
                            tim profesional.</p>
                        <a href="/layanan/propertisolution"
                            class="text-base font-semibold text-primary-yellow underline">Jelajahi Sekarang</a>
                    </div>
                </div>
                <div data-aos="flip-right" class="max-md:col-span-2">
                    <div
                        class="relative flex flex-col text-center border rounded-3xl gap-3 pt-12 pb-6 px-6 w-full hover:cursor-pointer hover:scale-110 transition-transform ease-in-out">

                        <img src="{{ asset('img/icons/properti-ideal-dark-icon.svg') }}"
                            class="absolute w-14 aspect-square left-1/2 -translate-x-1/2 -top-5" alt="Icon Propertiideal">
                        <p class="text-xl font-semibold text-black">Solusi Reparasi Hunian</p>
                        <p class="text-base text-black">Dari kerusakan kecil hingga masalah besar, Properti Ideal
                            menyediakan layanan reparasi hunian terpercaya untuk semua kebutuhan rumah Anda.</p>
                        <a href="/layanan/propertisolution"
                            class="text-base font-semibold text-primary-blue underline">Jelajahi
                            Sekarang</a>
                    </div>
                </div>
                <div data-aos="flip-left" class="max-md:col-span-2">
                    <div
                        class="relative flex flex-col text-center border rounded-3xl gap-3 pt-12 pb-6 px-6 w-full hover:cursor-pointer hover:scale-110 transition-transform ease-in-out">
                        <img src="{{ asset('img/icons/properti-ideal-dark-icon.svg') }}"
                            class="absolute w-14 aspect-square left-1/2 -translate-x-1/2 -top-5" alt="Icon Propertiideal">
                        <p class="text-xl font-semibold text-black">Solusi Design Interior</p>
                        <p class="text-base text-black">Dengan Properti Ideal, memulai proyek desain interior menjadi sangat
                            mudah. Pilih kategori desain, masukkan preferensi Anda, dan biarkan tim kami menangani sisanya.
                        </p>
                        <a href="/layanan/propertisolution"
                            class="text-base font-semibold text-primary-blue underline">Jelajahi Sekarang</a>
                    </div>
                </div>
                <div data-aos="flip-right" class="max-md:col-span-2">
                    <div
                        class="relative bg-secondary-blue flex flex-col text-center border rounded-3xl gap-3 pt-12 pb-6 px-6 w-full hover:cursor-pointer hover:scale-110 transition-transform ease-in-out">

                        <img src="{{ asset('img/icons/properti-ideal-light-icon.svg') }}"
                            class="absolute w-14 aspect-square left-1/2 -translate-x-1/2 -top-5" alt="Icon Propertiideal">
                        <p class="text-xl font-semibold text-white">Solusi Design Eksterior</p>
                        <p class="text-base text-white">Dari fasad modern hingga taman hijau yang asri, Properti Ideal
                            menyediakan layanan desain eksterior yang lengkap sesuai gaya dan kebutuhan Anda.</p>
                        <a href="/layanan/propertisolution"
                            class="text-base font-semibold text-primary-yellow underline">Jelajahi
                            Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <section class="max-w-5xl mx-auto w-full px-10  ">
        <div class="flex items-center justify-center flex-col gap-y-2 py-5">
            <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold">Testimonials</h2>
            <p class="text-lg font-medium text-slate-700/70 ">Discover how our service can benefit you</p>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-5 w-full">
            <div
                class="border p-7 rounded-xl bg-white  drop-shadow-md border-neutral-200/50 col-span-2 flex flex-col gap-y-10 justify-between">
                <div class="flex flex-col gap-y-3.5">
                    <p class="font-bold text-xl">Brilliant house to rent</p>
                    <p class="font-medium text-slate-700/90 ">All eFounders teams have moved to Cycle for all
                        things product management and it is truly a game-changer.</p>
                </div>
                <div class="flex flex-col">
                    <img src="https://randomuser.me/api/portraits/women/54.jpg" alt="Jane Cooper" class="h-10 w-10">
                    <p class="pt-2 text-sm font-semibold">Jane Cooper</p>
                    <p class="text-sm font-medium text-slate-700/70 ">CEO at ABC Corporation</p>
                </div>
            </div>
            <div
                class="border p-7 rounded-xl bg-white  drop-shadow-md border-neutral-200/50 col-span-3 flex flex-col gap-y-10 justify-between">
                <div class="flex flex-col gap-y-3.5">
                    <p class="font-bold text-xl">Efficient customer support</p>
                    <p class="font-medium text-slate-700/90 ">The customer support team at our service is
                        incredibly responsive and helpful. They went above and beyond to assist me with my issue.</p>
                </div>
                <div class="flex flex-col">
                    <img src="https://randomuser.me/api/portraits/women/30.jpg" alt="John Doe" class="h-10 w-10">
                    <p class="pt-2 text-sm font-semibold">Emily Smith</p>
                    <p class="text-sm font-medium text-slate-700/70 ">Marketing Manager at ABC Company</p>
                </div>
            </div>
            <div
                class="border p-7 rounded-xl bg-white  drop-shadow-md border-neutral-200/50 col-span-3 flex flex-col gap-y-10 justify-between">
                <div class="flex flex-col gap-y-3.5">
                    <p class="font-bold text-xl">Seamless integration process</p>
                    <p class="font-medium text-slate-700/90 ">Integrating our systems with our service was smooth
                        and hassle-free. The support team guided us through every step of the process.</p>
                </div>
                <div class="flex flex-col">
                    <img src="https://randomuser.me/api/portraits/women/90.jpg" alt="Jane Doe" class="h-10 w-10">
                    <p class="pt-2 text-sm font-semibold">Sarah Brown</p>
                    <p class="text-sm font-medium text-slate-700/70 ">CTO at XYZ Corporation</p>
                </div>
            </div>
            <div
                class="border p-7 rounded-xl bg-white  drop-shadow-md border-neutral-200/50 col-span-2 flex flex-col gap-y-10 justify-between">
                <div class="flex flex-col gap-y-3.5">
                    <p class="font-bold text-xl">Reliable service uptime</p>
                    <p class="font-medium text-slate-700/90 ">Our service has consistently maintained high uptime,
                        ensuring that our operations run smoothly without any disruptions.</p>
                </div>
                <div class="flex flex-col">
                    <img src="https://randomuser.me/api/portraits/men/90.jpg" alt="Ash Doe" class="h-10 w-10">
                    <p class="pt-2 text-sm font-semibold">James White</p>
                    <p class="text-sm font-medium text-slate-700/70 ">COO at XYZ Corporation</p>
                </div>
            </div>
        </div>
    </section> --}}
    <script
        src="https://cdn.jsdelivr.net/gh/Loopple/loopple-public-assets@main/motion-tailwind/scripts/plugins/countup.min.js">
    </script>
    @push('js')
        <script></script>
    @endpush
@endsection
