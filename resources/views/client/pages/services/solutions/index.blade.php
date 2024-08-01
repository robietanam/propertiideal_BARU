@extends('includes.app')

@section('title', 'Properti Ideal | Solution')

@section('content')
    <div class="bg-white py-12">
        <div class="mx-auto max-w-full px-6 lg:px-20">

            <div class="mx-auto max-w-5xl lg:text-center flex flex-col justify-center items-center pb-10">
                <h2
                    class="text-base font-semibold leading-7 text-blue-100 bg-blue-600 px-3 rounded-lg mb-4 lg:mb-4">
                    Properti Solution</h2>
                <h1 class="lg:text-7xl text-4xl md:text-5xl font-bold tracking-tight text-gray-900 text-center">Meyediakan
                    Layanan Properti
                    <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-blue-700 via-blue-800 to-gray-900">Sesuai
                        Kebutuhan Anda</span>
                </h1>
            </div>

            <ul role="list" class="grid xs:grid-cols-1 gap-6 px-8 sm:grid-cols-2 lg:grid-cols-2">
                <div class="w-full px-4">
                    <div class="relative flex flex-col bg-white ring-1 ring-primarybase w-full mb-4 shadow-lg rounded-lg">
                        <div class="bg-gray-50 rounded-lg">
                            <div class="relative flex">
                                <img src="{{ asset('icons/bg-for-card.png') }}" alt="montaña" class="w-full bg-cover rounded-lg" />
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <img src="{{ asset('icons/solusi-renovasi.png') }}" alt="icons-child" class="h-16" />
                                </div>
                            </div>
                            <div class="py-8 px-10">
                                <p class="text-3xl font-semibold text-textbase leading-sm">
                                    Solusi Pembangunan & Renovasi
                                </p>
                                <p class="text-xl text-textbase leading-sm mt-2">
                                    Pembangunan & Renovasi semakin mudah.
                                </p>
                                <div class="flex flex-wrap items-center mt-2 cursor-pointer">
                                    <a href="" class="flex text-primarybase font-semibold text-xl mr-3">
                                        Pelajari selengkapnya
                                    </a>
                                    <svg width="28" height="20" viewBox="0 0 28 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M21.8407 11.7976H1.79759C1.28827 11.7976 0.861346 11.6253 0.516807 11.2808C0.172269 10.9362 0 10.5093 0 10C0 9.49068 0.172269 9.06375 0.516807 8.71922C0.861346 8.37468 1.28827 8.20241 1.79759 8.20241H21.8407L16.7176 3.07927C16.3581 2.71976 16.1858 2.30032 16.2008 1.82096C16.2158 1.3416 16.388 0.922164 16.7176 0.562646C17.0771 0.203128 17.504 0.0158787 17.9984 0.000898796C18.4927 -0.0140811 18.9196 0.158188 19.2792 0.517706L27.5031 8.74169C27.6829 8.92144 27.8102 9.11618 27.8851 9.3259C27.96 9.53562 27.9975 9.76032 27.9975 10C27.9975 10.2397 27.96 10.4644 27.8851 10.6741C27.8102 10.8838 27.6829 11.0786 27.5031 11.2583L19.2792 19.4823C18.9196 19.8418 18.4927 20.0141 17.9984 19.9991C17.504 19.9841 17.0771 19.7969 16.7176 19.4374C16.388 19.0778 16.2158 18.6584 16.2008 18.179C16.1858 17.6997 16.3581 17.2802 16.7176 16.9207L21.8407 11.7976Z"
                                            fill="#AAC14C" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <li class="col-span-1 rounded-lg">
                    <div class="w-full px-4">
                        <div
                            class="relative flex flex-col bg-white ring-1 ring-primarybase w-full mb-4 shadow-lg rounded-lg">
                            <div class="bg-gray-50 rounded-lg">
                                <div class="relative flex">
                                    <img src="{{ asset('icons/bg-for-card.png') }}" alt="montaña" class="w-full bg-cover rounded-lg" />
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <img src="{{ asset('icons/solusi-reparasi.png') }}" alt="icons-child" class="h-16" />
                                    </div>
                                </div>
                                <div class="py-8 px-10">
                                    <p class="text-3xl font-semibold text-textbase leading-sm">
                                        Solusi Reparasi Hunian
                                    </p>
                                    <p class="text-xl text-textbase leading-sm mt-2">
                                        Lengkapi rumah Anda dengan barang-barang berkualitas. 🤩
                                    </p>
                                    <div class="flex flex-wrap items-center mt-2 cursor-pointer">
                                        <a href="" class="flex text-primarybase font-semibold text-xl mr-3">
                                            Pelajari selengkapnya
                                        </a>
                                        <svg width="28" height="20" viewBox="0 0 28 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M21.8407 11.7976H1.79759C1.28827 11.7976 0.861346 11.6253 0.516807 11.2808C0.172269 10.9362 0 10.5093 0 10C0 9.49068 0.172269 9.06375 0.516807 8.71922C0.861346 8.37468 1.28827 8.20241 1.79759 8.20241H21.8407L16.7176 3.07927C16.3581 2.71976 16.1858 2.30032 16.2008 1.82096C16.2158 1.3416 16.388 0.922164 16.7176 0.562646C17.0771 0.203128 17.504 0.0158787 17.9984 0.000898796C18.4927 -0.0140811 18.9196 0.158188 19.2792 0.517706L27.5031 8.74169C27.6829 8.92144 27.8102 9.11618 27.8851 9.3259C27.96 9.53562 27.9975 9.76032 27.9975 10C27.9975 10.2397 27.96 10.4644 27.8851 10.6741C27.8102 10.8838 27.6829 11.0786 27.5031 11.2583L19.2792 19.4823C18.9196 19.8418 18.4927 20.0141 17.9984 19.9991C17.504 19.9841 17.0771 19.7969 16.7176 19.4374C16.388 19.0778 16.2158 18.6584 16.2008 18.179C16.1858 17.6997 16.3581 17.2802 16.7176 16.9207L21.8407 11.7976Z"
                                                fill="#AAC14C" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>

            <ul role="list" class="grid xs:grid-cols-1 gap-6 px-8 sm:grid-cols-2 lg:grid-cols-2 mt-12">
                <div class="w-full px-4">
                    <div class="relative flex flex-col bg-white ring-1 ring-primarybase w-full mb-4 shadow-lg rounded-lg">
                        <div class="bg-gray-50 rounded-lg">
                            <div class="relative flex">
                                <img src="{{ asset('icons/bg-for-card.png') }}" alt="montaña" class="w-full bg-cover rounded-lg" />
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <img src="{{ asset('icons/solusi-desain-interior.png') }}" alt="icons-child" class="h-16" />
                                </div>
                            </div>
                            <div class="py-8 px-10">
                                <p class="text-3xl font-semibold text-textbase leading-sm">
                                    Solusi Design Interior
                                </p>
                                <p class="text-xl text-textbase leading-sm mt-2">
                                    Percantik Interior Anda dengan design yang memukau! 🤩
                                </p>
                                <div class="flex flex-wrap items-center mt-2 cursor-pointer">
                                    <a href="" class="flex text-primarybase font-semibold text-xl mr-3">
                                        Pelajari selengkapnya
                                    </a>
                                    <svg width="28" height="20" viewBox="0 0 28 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M21.8407 11.7976H1.79759C1.28827 11.7976 0.861346 11.6253 0.516807 11.2808C0.172269 10.9362 0 10.5093 0 10C0 9.49068 0.172269 9.06375 0.516807 8.71922C0.861346 8.37468 1.28827 8.20241 1.79759 8.20241H21.8407L16.7176 3.07927C16.3581 2.71976 16.1858 2.30032 16.2008 1.82096C16.2158 1.3416 16.388 0.922164 16.7176 0.562646C17.0771 0.203128 17.504 0.0158787 17.9984 0.000898796C18.4927 -0.0140811 18.9196 0.158188 19.2792 0.517706L27.5031 8.74169C27.6829 8.92144 27.8102 9.11618 27.8851 9.3259C27.96 9.53562 27.9975 9.76032 27.9975 10C27.9975 10.2397 27.96 10.4644 27.8851 10.6741C27.8102 10.8838 27.6829 11.0786 27.5031 11.2583L19.2792 19.4823C18.9196 19.8418 18.4927 20.0141 17.9984 19.9991C17.504 19.9841 17.0771 19.7969 16.7176 19.4374C16.388 19.0778 16.2158 18.6584 16.2008 18.179C16.1858 17.6997 16.3581 17.2802 16.7176 16.9207L21.8407 11.7976Z"
                                            fill="#AAC14C" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <li class="col-span-1 rounded-lg">
                    <div class="w-full px-4">
                        <div
                            class="relative flex flex-col bg-white ring-1 ring-primarybase w-full mb-4 shadow-lg rounded-lg">
                            <div class="bg-gray-50 rounded-lg">
                                <div class="relative flex">
                                    <img src="{{ asset('icons/bg-for-card.png') }}" alt="montaña" class="w-full bg-cover rounded-lg" />
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <img src="{{ asset('icons/solusi-desain-eksterior.png') }}" alt="icons-child" class="h-16" />
                                    </div>
                                </div>
                                <div class="py-8 px-10">
                                    <p class="text-3xl font-semibold text-textbase leading-sm">
                                        Solusi Design Eksterior
                                    </p>
                                    <p class="text-xl text-textbase leading-sm mt-2">
                                        Pemandanan eksterior jadi lebih indah dan cepat! 🤩
                                    </p>
                                    <div class="flex flex-wrap items-center mt-2 cursor-pointer">
                                        <a href="" class="flex text-primarybase font-semibold text-xl mr-3">
                                            Pelajari selengkapnya
                                        </a>
                                        <svg width="28" height="20" viewBox="0 0 28 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M21.8407 11.7976H1.79759C1.28827 11.7976 0.861346 11.6253 0.516807 11.2808C0.172269 10.9362 0 10.5093 0 10C0 9.49068 0.172269 9.06375 0.516807 8.71922C0.861346 8.37468 1.28827 8.20241 1.79759 8.20241H21.8407L16.7176 3.07927C16.3581 2.71976 16.1858 2.30032 16.2008 1.82096C16.2158 1.3416 16.388 0.922164 16.7176 0.562646C17.0771 0.203128 17.504 0.0158787 17.9984 0.000898796C18.4927 -0.0140811 18.9196 0.158188 19.2792 0.517706L27.5031 8.74169C27.6829 8.92144 27.8102 9.11618 27.8851 9.3259C27.96 9.53562 27.9975 9.76032 27.9975 10C27.9975 10.2397 27.96 10.4644 27.8851 10.6741C27.8102 10.8838 27.6829 11.0786 27.5031 11.2583L19.2792 19.4823C18.9196 19.8418 18.4927 20.0141 17.9984 19.9991C17.504 19.9841 17.0771 19.7969 16.7176 19.4374C16.388 19.0778 16.2158 18.6584 16.2008 18.179C16.1858 17.6997 16.3581 17.2802 16.7176 16.9207L21.8407 11.7976Z"
                                                fill="#AAC14C" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
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

@endsection
