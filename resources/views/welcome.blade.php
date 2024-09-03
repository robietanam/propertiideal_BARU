@extends('includes.app')

@section('title', 'Properti Ideal | Jual beli properti')

@section('content')
    <div class="relative h-[40rem] isolate overflow-hidden bg-primarybase">
        <div class="absolute top-0 w-full h-full bg-center bg-cover"
            style="background-image: url('{{ asset('img/properti-ideal-hero.jpeg') }}');">
            <span id="blackOverlay" class="w-full h-full absolute opacity-25 bg-black"></span>
        </div>

        <div class="container px-6 py-10 h-screen mx-auto md:py-5">
            <div class="flex flex-col space-y-6 md:flex-row md:space-x-3">
                <div class="w-full">
                    <div class="max-w-2xl">
                        <div class="relative flex mt-10 flex-col bg-white ring-1 ring-primarybase w-full mb-4 rounded-lg">
                            <div class="bg-white rounded-lg">
                                <div class="py-8 px-10">
                                    <h1
                                        class="overflow-hidden whitespace-nowrap-textbase pr-3 text-2xl font-bold tracking-tight text-textbase sm:text-5xl">
                                        Beli properti dari rumah</h1>
                                    <p class="mt-3 text-xl leading-8 text-textbase">Kami menyediakan berbagai pilihan
                                        properti yang cocok untuk berbagai kebutuhan, mulai dari hunian pribadi hingga
                                        bisnis komersil.</p>
                                    <div class="mt-3 flex items-center gap-x-6">
                                        <a href="{{ route('pages.buy') }}"
                                            class="rounded-md items-center gap-x-3 flex flex-wrap cursor-pointer bg-primarybase px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-blue-200 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-400">
                                            Beli properti <span aria-hidden="true">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                    viewBox="0 -960 960 960" width="24px" fill="#ffffff">
                                                    <path
                                                        d="m560-240-56-58 142-142H160v-80h486L504-662l56-58 240 240-240 240Z" />
                                                </svg>
                                            </span>
                                        </a>
                                        <a href="{{ route('pages.buy') }}"
                                            class="rounded-md bg-white cursor-pointer ring-1 ring-primarybase px-5 py-2.5 text-sm font-semibold leading-6 text-primarybase hover:bg-primarybase hover:text-white">Sewa
                                            properti</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="pb-10 -mt-[5rem]">
        <div class="container px-9 mx-auto">
            <div class="flex flex-wrap">

                <div class="w-full md:w-4/12 px-4 mt-10">
                    <div class="relative flex flex-col min-w-0 bg-white w-full mb-8 shadow-lg rounded-lg">
                        {{-- <div class="w-full flex justify-center">
                            <div class="relative">
                                <div class="max-w-[100px]">
                                    <img src="{{ asset('icons/connect.svg') }}"
                                        class="rounded-lg bg-white p-4 ring-1 ring-primarybase absolute -m-20 -ml-36 lg:-ml-36 -mt-12 max-w-[60px]" />
                                </div>
                            </div>
                        </div> --}}
                        <div class="bg-gray-50 rounded-lg ring-1 ring-primarybase">
                            <div class="">
                                <img src="{{ asset('icons/bg-for-card.png') }}" alt="montaña"
                                    class="w-full bg-cover rounded-lg" />
                                <div class="absolute inset-0 flex items-start pt-4 justify-center">
                                    <img src="{{ asset('icons/properti-ideal-services.png') }}" alt="montaña"
                                        class="w-20" />
                                </div>
                            </div>
                            <div class="p-4 space-y-3">
                                <p class="text-xl text-textbase leading-sm">
                                    Kami siap membantu anda menjual properti dengan cepat dan efisien 🤝
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full md:w-4/12 px-4 mt-10">
                    <div class="relative flex flex-col min-w-0 bg-white w-full mb-8 shadow-lg rounded-lg">
                        {{-- <div class="w-full flex justify-center">
                            <div class="relative">
                                <div class="max-w-[100px]">
                                    <img src="{{ asset('icons/real_estate.svg') }}"
                                        class="rounded-lg bg-white p-4 ring-1 ring-primarybase absolute -m-20 -ml-36 lg:-ml-36 -mt-12 max-w-[60px]" />
                                </div>
                            </div>
                        </div> --}}
                        <div class="bg-gray-50 rounded-lg ring-1 ring-primarybase">
                            <div class="">
                                <img src="{{ asset('icons/bg-for-card.png') }}" alt="montaña"
                                    class="w-full bg-cover rounded-lg" />
                                <div class="absolute inset-0 flex items-start pt-4 justify-center">
                                    <img src="{{ asset('icons/properti-ideal-services.png') }}" alt="montaña"
                                        class="w-20" />
                                </div>
                            </div>
                            <div class="p-4 space-y-3">
                                <p class="text-xl text-textbase leading-sm">
                                    Telusuri berbagai pilihan properti yang sesuai dengan keinginan dan anggaran Anda 🤝
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full md:w-4/12 px-4 mt-10">
                    <div class="relative flex flex-col min-w-0 bg-white w-full mb-8 shadow-lg rounded-lg">
                        {{-- <div class="w-full flex justify-center">
                            <div class="relative">
                                <div class="max-w-[100px]">
                                    <img src="{{ asset('icons/map.svg') }}"
                                        class="rounded-lg bg-white p-4 ring-1 ring-primarybase absolute -m-20 -ml-36 lg:-ml-36 -mt-12 max-w-[60px]" />
                                </div>
                            </div>
                        </div> --}}
                        <div class="bg-gray-50 rounded-lg ring-1 ring-primarybase">
                            <div class="">
                                <img src="{{ asset('icons/bg-for-card.png') }}" alt="montaña"
                                    class="w-full bg-cover rounded-lg" />
                                <div class="absolute inset-0 flex items-start pt-4 justify-center">
                                    <img src="{{ asset('icons/properti-ideal-services.png') }}" alt="montaña"
                                        class="w-20" />
                                </div>
                            </div>
                            <div class="p-4 space-y-3">
                                <p class="text-xl text-textbase leading-sm">
                                    Kami memiliki daftar properti sewa terbaik dalam berbagai pilihan lokasi 🤝
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <div class="overflow-hidden bg-white py-24 sm:py-32">
        <div class="mx-auto lg:max-w-full px-6 lg:px-20">
            <div class="mx-auto grid w-full grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:grid-cols-2 lg:px-10">
                <div class="lg:pr-8">
                    <div class="lg:px-10">
                        <p rel="noreferrer"
                            class="w-48 border border-primarybase cursor-pointer rounded-2xl py-1 px-4 text-primarybase text-sm mb-5 hover:scale-105 transition duration-300 ease-in-out flex">
                            <span class="font-semibold text-center mx-auto justify-center flex items-center">Properti
                                Ideal</span>
                        </p>
                        <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Temukan Properti Impian
                            Anda</p>
                        <p class="mt-6 text-lg leading-8 text-gray-600">Kami siap membantu Anda menemukan properti terbaik
                            sesuai dengan keinginan dan anggaran Anda. Proses jual beli yang cepat dan efisien adalah
                            prioritas kami</p>
                        <dl class="mt-10 max-w-xl space-y-8 text-base leading-7 text-gray-600 lg:max-w-none">
                            <div class="relative pl-9">
                                <dt class="inline font-semibold text-gray-900">
                                    🏡 Proses Cepat
                                </dt>
                                <dd class="inline">Kami memastikan proses jual beli properti berjalan cepat dan tanpa
                                    hambatan, memberikan Anda pengalaman yang menyenangkan</dd>
                            </div>
                            <div class="relative pl-9">
                                <dt class="inline font-semibold text-gray-900">
                                    🚎 Kemudahan menemukan properti
                                </dt>
                                <dd class="inline">Kami menyediakan beberapa kategori properti yang dapat Anda pilih sesuai
                                    kebutuhan Anda</dd>
                            </div>
                            <div class="relative pl-9">
                                <dt class="inline font-semibold text-gray-900">👷🏻 Solusi Properti
                                </dt>
                                <dd class="inline">TIdak hanya menjual properti, kami juga memberikan layanan solusi untuk
                                    kebutuhan properti anda!</dd>
                            </div>
                        </dl>
                    </div>
                </div>
                {{-- <img src="https://panangianschool.com/wp-content/uploads/2022/12/Macam-Macam-Contoh-Investasi-Properti-1200px-x-675px-1200x675.jpg"
                    alt="properti"
                    class="w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem] md:-ml-4 lg:-ml-0"
                    width="2432" height="1442"> --}}
                <div class="flex justify-center">

                    <!-- Modal video component -->
                    <div class="[&_[x-cloak]]:hidden" x-data="{ modalOpen: false }">

                        <!-- Video thumbnail -->
                        <button
                            class="relative flex justify-center items-center focus:outline-none focus-visible:ring focus-visible:ring-indigo-300 rounded-3xl group"
                            @click="modalOpen = true" aria-controls="modal" aria-label="Watch the video">
                            <img class="rounded-3xl shadow-2xl transition-shadow duration-300 ease-in-out"
                                src="https://i.ytimg.com/sb/DOH--oIZkMk/storyboard3_L2/M1.jpg?sqp=-oaymwENSDfyq4qpAwVwAcABBqLzl_8DBgj-qpS1Bg==&sigh=rs%24AOn4CLAzAbK_hFTtZ3F-nikU-jZeS4h_YQ"
                                width="768" height="432" alt="Modal video thumbnail" />
                            <!-- Play icon -->
                            <svg class="absolute pointer-events-none group-hover:scale-110 transition-transform duration-300 ease-in-out"
                                xmlns="http://www.w3.org/2000/svg" width="72" height="72">
                                <circle class="fill-white" cx="36" cy="36" r="36" fill-opacity=".8" />
                                <path class="fill-indigo-500 drop-shadow-2xl"
                                    d="M44 36a.999.999 0 0 0-.427-.82l-10-7A1 1 0 0 0 32 29V43a.999.999 0 0 0 1.573.82l10-7A.995.995 0 0 0 44 36V36c0 .001 0 .001 0 0Z" />
                            </svg>
                        </button>
                        <!-- End: Video thumbnail -->

                        <!-- Modal backdrop -->
                        <div class="fixed inset-0 z-[99999] bg-black bg-opacity-50 transition-opacity" x-show="modalOpen"
                            x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0"
                            x-transition:enter-end="opacity-100" x-transition:leave="transition ease-out duration-100"
                            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" aria-hidden="true"
                            x-cloak></div>
                        <!-- End: Modal backdrop -->

                        <!-- Modal dialog -->
                        <div id="modal" class="fixed inset-0 z-[99999] flex px-4 md:px-6 py-6" role="dialog"
                            aria-modal="true" x-show="modalOpen" x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 scale-75" x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-out duration-200"
                            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-75"
                            x-cloak>
                            <div class="max-w-5xl mx-auto h-full flex items-center">
                                <div class="w-full max-h-full rounded-3xl shadow-2xl aspect-video bg-primarybase overflow-hidden"
                                    @click.outside="modalOpen = false" @keydown.escape.window="modalOpen = false">
                                    <video x-init="$watch('modalOpen', value => value ? $el.play() : $el.pause())" width="1920" height="1080" loop controls>
                                        <source src="https://www.youtube.com/watch?v=DOH--oIZkMk" type="video/mp4" />
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                            </div>
                        </div>
                        <!-- End: Modal dialog -->

                    </div>
                    <!-- End: Modal video component -->

                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @push('js')
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
