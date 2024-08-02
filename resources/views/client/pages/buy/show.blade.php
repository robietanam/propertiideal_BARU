@extends('includes.app')

@section('title', 'Properti Ideal | Beli')

@section('content')
    <div class="py-6">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6">

            <div class="flex flex-col md:flex-row -mx-4">

                <div class="md:flex-1 px-4">
                    <div x-data="{ image: 1 }">
                        <div class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4">
                            @foreach ($propertiCollection->foto_properti as $index => $collectImage)
                                <div x-show="image === {{ $index + 1 }}"
                                class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center justify-center overflow-hidden">
                                    <img src="{{ asset($collectImage['foto_properti']) }}" class="w-full h-full object-cover" alt="">
                                </div>
                            @endforeach
                        </div>

                        <div class="flex -mx-2 mb-4">
                            @foreach ($propertiCollection->foto_properti as $index => $collectImage)
                                <div class="flex-1 px-2">
                                    <button x-on:click="image = {{ $index + 1 }}"
                                        :class="{ 'ring-2 ring-indigo-300 ring-inset': image === {{ $index + 1 }} }"
                                        class="focus:outline-none w-full rounded-lg h-20 md:h-20 bg-gray-100 flex items-center justify-center">
                                        <img src="{{ asset($collectImage['foto_properti']) }}" class="w-full h-full object-cover rounded-lg" alt="">
                                    </button>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="md:flex-1 px-4">
                    <h2 class="mb-2 leading-tight tracking-tight font-bold text-gray-800 text-2xl md:text-3xl">
                        {{ $propertiCollection->nama_properti }}</h2>

                    <p class="text-gray-500 text-sm">Oleh
                        <a href="#" class="text-indigo-600 hover:underline">
                            @foreach ($propertiCollection->partner as $collectPartner)
                                {{ $collectPartner['user']['nama'] }}
                            @endforeach
                        </a>
                    </p>

                    <div class="flex items-center space-x-4 my-4">
                        <div>
                            <div class="rounded-lg bg-gray-100 flex py-2 px-3">
                                <span class="text-indigo-400 mr-2 mt-1">Rp</span>
                                <span
                                    class="font-bold text-indigo-600 text-3xl">{{ number_format($propertiCollection->harga, 0, ',', '.') }}</span>
                            </div>
                        </div>

                    </div>

                    <p class="text-gray-500">
                        {{ $propertiCollection->deskripsi }}

                    </p>

                    <p class="text-gray-500">
                        @foreach ($propertiCollection->partner as $collectPartner)
                            {{ $collectPartner->detail_alamat }}
                        @endforeach
                    </p>

                    <div class="flex py-4 space-x-4">
                        <a href="https://wa.me/<?= $propertiCollection->partner[0]['no_telepon'] ?>"
                            class="h-14 px-6 items-center flex py-2 font-semibold rounded-xl bg-indigo-600 hover:bg-indigo-500 text-white">
                            Hubungi penjual
                        </a>

                        {{-- <button type="button"
                            class="h-14 px-6 py-2 font-semibold ring-1 ring-primarybase rounded-xl bg-white hover:bg-indigo-500 text-primarybase">
                            Tambah ke wishlist
                        </button> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <script src='https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js'></script> --}}
    <script src="chrome-extension://kgejglhpjiefppelpmljglcjbhoiplfn/shadydom.js"></script>
    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
    <script>
        if (!window.ShadyDOM) window.ShadyDOM = {
            force: true,
            noPatch: true
        };
    </script>
    @push('js')
    @endpush
@endsection
