@extends('includes.app')

@section('title', 'Properti Ideal')

@section('content')
    <div class="bg-white min-h-screen">

        <div class="px-28 py-10">
            <div class="relative z-10 pb-10">
                <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-16">
                    <div class="max-w-2xl text-center mx-auto">
                        <div class="mt-5 max-w-2xl">
                            <h1 class="block font-bold text-textbase text-5xl md:text-5xl lg:text-6xl">
                                Menyediakan Layanan<span class="text-primarybase"> Sesuai Kebutuhan Anda</span>
                            </h1>
                        </div>

                        <div class="mt-5 max-w-3xl">
                            <p class="text-lg text-textbase">Jual properti, beli properti
                                dengan berbagai layanan yang tersedia di Properti Ideal.</p>
                        </div>
                    </div>
                </div>
            </div>

            <ul role="list" class="grid xs:grid-cols-1 gap-6 px-8 sm:grid-cols-2 lg:grid-cols-2">
                <div class="w-full px-4">
                    <div class="relative flex flex-col bg-white ring-1 ring-primarybase w-full mb-4 shadow-lg rounded-lg">
                        <div class="bg-gray-50 rounded-lg">
                            <div class="relative flex">
                                <img src="{{ asset('icons/bg-for-card.png') }}" alt="montaña" class="w-full bg-cover rounded-lg" />
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <img src="{{ asset('icons/properti-service.png') }}" alt="montaña" class="h-16" />
                                </div>
                            </div>
                            <div class="py-8 px-10">
                                <p class="text-3xl font-semibold text-textbase leading-sm">
                                    Properti Ideal
                                </p>
                                <p class="text-xl text-textbase leading-sm mt-2">
                                    Lift-up Properti Anda, Beli hunian impian anda dengan Properti Ideal! 🤩
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
                                        <img src="{{ asset('icons/properti-solution.png') }}" alt="montaña" class="h-16" />
                                    </div>
                                </div>
                                <div class="py-8 px-10">
                                    <p class="text-3xl font-semibold text-textbase leading-sm">
                                        Properti Solution
                                    </p>
                                    <p class="text-xl text-textbase leading-sm mt-2">
                                        Solusi menyeluruh untuk Pembangunan, Renovasi, dan Desain Interior. 🤩
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

        <div class="flex mx-auto justify-center">
            <section class="bg-white px-10">
                <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
                    <div class="mr-auto place-self-center lg:col-span-7">
                        <h1 class="text-textbase max-w-2xl mb-4 text-6xl font-bold leading-none md:text-5xl xl:text-6xl">
                            Berbagai produk yang tersedia di Properti Ideal</h1>
                        <p class="text-textbase max-w-2xl mb-6 font-semibold lg:mb-8 md:text-xl lg:text-2xl">
                            Temukan segala jenis properti dengan proses mudah di Properti Ideal</p>
                    </div>
                    <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                        <img src="https://kfmap.asia/storage/uploads/shares/Monicha-Article/thumbnail/28%20Jun/1649073890477_74_11062021-zam-bisnis-18-perumahan-1_8670.jpg" alt="mockup">
                    </div>
                </div>
            </section>
        </div>
        <div class="flex mx-auto justify-center">
            <section class="bg-white px-10">
                <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
                    <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                        <img src="https://www.cekpremi.com/blog/wp-content/uploads/2021/05/jual-beli-properti.jpg" alt="mockup">
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
    </div>

    <div class="py-5 ">
        <div class="container flex flex-col items-center justify-center w-full p-6 mx-auto text-center xl:px-0">
            <div class="text-lg font-bold tracking-wider text-indigo-600 ">Testimoni</div>
            <h2
                class="max-w-2xl mt-3 text-3xl font-bold leading-snug tracking-tight text-gray-800 lg:leading-tight lg:text-4xl ">
                Apa yang customer kami katakan?</h2>
            <p class="max-w-2xl py-4 text-lg leading-normal text-gray-500 lg:text-xl xl:text-xl ">Ini adalah beberapa testimoni dari pengguna atau customer yang telah menggunakan platform kami</p>
        </div>
        <div class="container p-6 mx-auto mb-10 xl:px-0">
            <div class="grid gap-10 lg:grid-cols-2 xl:grid-cols-3">
                <div class="lg:col-span-2 xl:col-auto">
                    <div class="flex flex-col justify-between w-full h-full px-6 py-6 bg-gray-100 md:px-14 rounded-2xl md:py-14">
                        <p class="text-2xl leading-normal">"Berkat <mark class="mx-1 text-indigo-800 bg-indigo-100 rounded-md ring-indigo-100 ring-4">Properti Ideal</mark> telah mengubah segalanya. Tim mereka membuat proses penjualan menjadi lancar dan bebas stres. Saya menjual properti saya dalam waktu singkat!"</p>
                        <div class="flex items-center mt-8 space-x-3">
                            <div class="flex-shrink-0 overflow-hidden rounded-full w-14 h-14">
                                <img alt="Avatar" src="https://images.unsplash.com/photo-1511485977113-f34c92461ad9?crop=faces&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwxfDB8MXxhbGx8fHx8fHx8fHwxNjIwMTQ5ODEx&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=100&amp;h=100" loading="lazy" />
                            </div>
                            <div>
                                <div class="text-lg font-medium text-gray-900">Rina Suryani</div>
                                <div class="text-gray-600">Manager Penjualan di PT. ABC</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="flex flex-col justify-between w-full h-full px-6 py-6 bg-gray-100 md:px-14 rounded-2xl md:py-14">
                        <p class="text-2xl leading-normal">"Berkat <mark class="mx-1 text-indigo-800 bg-indigo-100 rounded-md ring-indigo-100 ring-4">Properti Ideal</mark>, saya menemukan rumah impian saya dengan mudah. Daftar properti mereka yang luas dan layanan yang penuh perhatian sangat membantu."</p>
                        <div class="flex items-center mt-8 space-x-3">
                            <div class="flex-shrink-0 overflow-hidden rounded-full w-14 h-14">
                                <img alt="Avatar" src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;crop=faces&amp;fit=crop&amp;w=100&amp;h=100&amp;q=80" loading="lazy" />
                            </div>
                            <div>
                                <div class="text-lg font-medium text-gray-900">Joko Widodo</div>
                                <div class="text-gray-600">Direktur Utama di PT. DEF</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="flex flex-col justify-between w-full h-full px-6 py-6 bg-gray-100 md:px-14 rounded-2xl md:py-14">
                        <p class="text-2xl leading-normal">"Saya sangat merekomendasikan <mark class="mx-1 text-indigo-800 bg-indigo-100 rounded-md ring-indigo-100 ring-4">Properti Ideal</mark> untuk layanan dan profesionalisme mereka yang luar biasa. Mereka membantu saya mendapatkan properti sewaan yang sempurna dalam waktu singkat."</p>
                        <div class="flex items-center mt-8 space-x-3">
                            <div class="flex-shrink-0 overflow-hidden rounded-full w-14 h-14">
                                <img alt="Avatar" src="https://images.unsplash.com/photo-1624224971170-2f84fed5eb5e?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=100&amp;h=100&amp;crop=faces&amp;q=80" loading="lazy" />
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
