@extends('includes.app')

@section('title', 'Properti Ideal | Layanan')

@section('content')
    <div class="bg-white min-h-screen">

        <div class="px-28 py-10">
            <div class="relative z-10 pb-10">
                <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-16">
                    <div class="max-w-2xl text-center mx-auto">
                        <div class="mt-5 max-w-2xl">
                            <h1 class="block font-bold text-textbase text-5xl md:text-5xl lg:text-6xl">
                                Menyediakan Layanan Sesuai Kebutuhan <span class="text-primarybase">Anda</span>
                            </h1>
                        </div>

                        <div class="mt-5 max-w-3xl">
                            <p class="text-lg text-textbase">Kelola peternakan, jual hewan ternak, beli hewan ternak
                                dengan berbagai layanan yang tersedia di eFarm.</p>
                        </div>
                    </div>
                </div>
            </div>

            <ul role="list" class="grid xs:grid-cols-1 gap-6 px-8 sm:grid-cols-2 lg:grid-cols-2">
                <div class="w-full px-4">
                    <div class="relative flex flex-col bg-white ring-1 ring-primarybase w-full mb-4 shadow-lg rounded-lg">
                        <div class="bg-gray-50 rounded-lg">
                            <div class="relative flex">
                                <img src="{{ asset('cardcover.png') }}" alt="montaña" class="w-full bg-cover" />
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <img src="{{ asset('efarm-market.png') }}" alt="montaña" class="" />
                                </div>
                            </div>
                            <div class="py-8 px-10">
                                <p class="text-3xl font-semibold text-textbase leading-sm">
                                    Jual Properti
                                </p>
                                <p class="text-xl text-textbase leading-sm mt-2">
                                    Jual properti anda dengan cepat dan teat! 🤩
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
                                    <img src="{{ asset('cardcover.png') }}" alt="montaña" class="w-full bg-cover" />
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <img src="{{ asset('efarm-partner-logo.png') }}" alt="montaña" class="" />
                                    </div>
                                </div>
                                <div class="py-8 px-10">
                                    <p class="text-3xl font-semibold text-textbase leading-sm">
                                        Beli Properti
                                    </p>
                                    <p class="text-xl text-textbase leading-sm mt-2">
                                        Beli Properti tanpa harus ribet. 🤩
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

    <section class="py-20">
        <div class="px-8 py-24 mx-auto md:px-12 lg:px-32 max-w-screen-xl flex flex-col lg:h-svh justify-center">
            <div class="flex flex-col ">
                <div class="prose text-gray-500 prose-sm prose-headings:font-normal prose-headings:text-xl">
                    <div>
                        <h1>Simplified markup</h1>
                        <p class="text-balance">
                            See the code for this page to see how you can use Astro to simplify your markup.
                        </p>
                    </div>
                </div> <!-- Starts component -->
                <div class="mt-6 border-t pt-12">
                    <div class="grid grid-cols-1 gap-8 md:grid-cols-2 md:gap-24 items-center ">
                        <div> <span class="text-gray-600  uppercase text-xs font-medium "> Because why not </span>
                            <p class="text-4xl mt-8 tracking-tighter font-semibold text-gray-700 text-balance"> Innovative
                                financial solutions for every situation </p>
                            <p class="text-sm  mt-4 text-gray-700 text-balance"> Discover a variety of tools, services, and
                                expert guidance tailored to your unique financial needs. </p>
                            <div
                                class="mt-6 text-xs font-medium grid grid-cols-1 sm:grid-cols-2 md:grid-cols-1 lg:grid-cols-2 gap-2 text-gray-950">
                                <div class="inline-flex items-center gap-2  text-xs text-gray-700"> <svg
                                        class="icon icon-tabler text-gray-700 size-4 icon-tabler-360" viewBox="0 0 24 24"
                                        stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path
                                            d="M17 15.328c2.414 -.718 4 -1.94 4 -3.328c0 -2.21 -4.03 -4 -9 -4s-9 1.79 -9 4s4.03 4 9 4">
                                        </path>
                                        <path d="M9 13l3 3l-3 3"></path>
                                    </svg> <span class="text-gray-950 font-medium text-sm"> Clear data visibility </span>
                                </div>
                                <div class="inline-flex items-center gap-2  text-xs text-gray-700"> <svg
                                        class="icon icon-tabler text-gray-700 size-4 icon-tabler-antenna-bars-3"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M6 18l0 -3"></path>
                                        <path d="M10 18l0 -6"></path>
                                        <path d="M14 18l0 .01"></path>
                                        <path d="M18 18l0 .01"></path>
                                    </svg> <span class="text-gray-950 font-medium text-sm"> Reduced external factors </span>
                                </div>
                                <div class="inline-flex items-center gap-2  text-xs text-gray-700"> <svg
                                        class="icon icon-tabler text-gray-700 size-4 icon-tabler-load-balancer"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M12 13m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                        <path d="M12 20m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                        <path d="M12 16v3"></path>
                                        <path d="M12 10v-7"></path>
                                        <path d="M9 6l3 -3l3 3"></path>
                                        <path d="M12 10v-7"></path>
                                        <path d="M9 6l3 -3l3 3"></path>
                                        <path d="M14.894 12.227l6.11 -2.224"></path>
                                        <path d="M17.159 8.21l3.845 1.793l-1.793 3.845"></path>
                                        <path d="M9.101 12.214l-6.075 -2.211"></path>
                                        <path d="M6.871 8.21l-3.845 1.793l1.793 3.845"></path>
                                    </svg> <span class="text-gray-950 font-medium text-sm"> enhanced stabilty </span>
                                </div>
                                <div class="inline-flex items-center gap-2  text-xs text-gray-700"> <svg
                                        class="icon icon-tabler text-gray-700 size-4 icon-tabler-brand-speedtest"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M5.636 19.364a9 9 0 1 1 12.728 0"></path>
                                        <path d="M16 9l-4 4"></path>
                                    </svg> <span class="text-gray-950 font-medium text-sm"> accelerated times </span>
                                </div>
                            </div>
                        </div>
                        <div class="h-full md:order-first"> <img
                                src="https://i.pinimg.com/564x/59/41/a0/5941a02c048f6226031a0487451c2651.jpg"
                                alt="#_"
                                class=" bg-gray-200 shadow-box shadow-gray-500/30 overflow-hidden aspect-square  w-full h-full object-cover object-center">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 gap-8 md:grid-cols-2 md:gap-24 items-center md:flex-row-reverse">
                        <div> <span class="text-gray-600  uppercase text-xs font-medium "> Just because we can </span>
                            <p class="text-4xl mt-8 tracking-tighter font-semibold text-gray-700 text-balance"> Tailored
                                financial solutions for any scenario </p>
                            <p class="text-sm  mt-4 text-gray-700 text-balance"> Discover a range of financial instruments
                                and personalized advice designed to meet your unique requirements. </p>
                            <div
                                class="mt-6 text-xs font-medium grid grid-cols-1 sm:grid-cols-2 md:grid-cols-1 lg:grid-cols-2 gap-2 text-gray-950">
                                <div class="inline-flex items-center gap-2  text-xs text-gray-700"> <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-database text-gray-700 size-4"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M12 6m-8 0a8 3 0 1 0 16 0a8 3 0 1 0 -16 0"></path>
                                        <path d="M4 6v6a8 3 0 0 0 16 0v-6"></path>
                                        <path d="M4 12v6a8 3 0 0 0 16 0v-6"></path>
                                    </svg> <span class="text-gray-950 font-medium text-sm"> Transparent Data Access </span>
                                </div>
                                <div class="inline-flex items-center gap-2  text-xs text-gray-700"> <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-building text-gray-700 size-4"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M3 21l18 0"></path>
                                        <path d="M9 8l1 0"></path>
                                        <path d="M9 12l1 0"></path>
                                        <path d="M9 16l1 0"></path>
                                        <path d="M14 8l1 0"></path>
                                        <path d="M14 12l1 0"></path>
                                        <path d="M14 16l1 0"></path>
                                        <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16"></path>
                                    </svg> <span class="text-gray-950 font-medium text-sm"> Lowered Interference </span>
                                </div>
                                <div class="inline-flex items-center gap-2  text-xs text-gray-700"> <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-augmented-reality-2 text-gray-700 size-4"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M10 21h-2a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v3.5"></path>
                                        <path d="M17 17l-4 -2.5l4 -2.5l4 2.5v4.5l-4 2.5z"></path>
                                        <path d="M13 14.5v4.5l4 2.5"></path>
                                        <path d="M17 17l4 -2.5"></path>
                                        <path d="M11 4h2"></path>
                                    </svg> <span class="text-gray-950 font-medium text-sm"> Improved Reliability </span>
                                </div>
                                <div class="inline-flex items-center gap-2  text-xs text-gray-700"> <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-time-duration-0 text-gray-700 size-4"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M3 12v.01"></path>
                                        <path d="M21 12v.01"></path>
                                        <path d="M12 21v.01"></path>
                                        <path d="M12 3v.01"></path>
                                        <path d="M7.5 4.2v.01"></path>
                                        <path d="M16.5 4.2v.01"></path>
                                        <path d="M16.5 19.8v.01"></path>
                                        <path d="M7.5 19.8v.01"></path>
                                        <path d="M4.2 16.5v.01"></path>
                                        <path d="M19.8 16.5v.01"></path>
                                        <path d="M19.8 7.5v.01"></path>
                                        <path d="M4.2 7.5v.01"></path>
                                        <path d="M10 11v2a2 2 0 1 0 4 0v-2a2 2 0 1 0 -4 0z"></path>
                                    </svg> <span class="text-gray-950 font-medium text-sm"> Faster Processing Times </span>
                                </div>
                            </div>
                        </div>
                        <div class="h-full "> <img
                                src="https://i.pinimg.com/564x/4e/a7/ff/4ea7ff230ad9f3bc1c30b1b6cbaccad3.jpg"
                                alt="#_"
                                class=" bg-gray-200 shadow-box shadow-gray-500/30 overflow-hidden aspect-square  w-full h-full object-cover object-center">
                        </div>
                    </div>
                </div> <!-- Emds component -->
            </div>
        </div>
    </section>

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
