@extends('partner.layouts.app')

@section('title', 'Dashboard | Partner')

@section('content')
    <div class="flex flex-col">
        <h2 class="mb-4 text-2xl font-bold">Dashboard</h2>
        <div class="mt-4 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-5 xl:grid-cols-5">
                <div class="flex items-start rounded-xl bg-white p-4 shadow-lg col-span-1">
                    <div class="flex h-12 w-12 items-center justify-center rounded-full border border-blue-100 bg-blue-50">
                        <img src="{{ asset('icons/house.svg') }}" alt="" class="h-7 w-7">
                    </div>

                    <div class="ml-4">
                        <h2 class="font-semibold">{{ $partials['countProperti'] }} Properti</h2>
                        <p class="mt-2 text-sm text-gray-500">Properti Rumah</p>
                    </div>
                </div>

                <div class="flex items-start rounded-xl bg-white p-4 shadow-lg col-span-2">
                    <div
                        class="flex h-12 w-12 items-center justify-center rounded-full border border-orange-100 bg-orange-50">
                        <img src="{{ asset('icons/apartement.svg') }}" alt="" class="h-7 w-7">
                    </div>

                    <div class="ml-4">
                        <h2 class="font-semibold">{{ $partials['countApartement'] }} Properti</h2>
                        <p class="mt-2 text-sm text-gray-500">Properti Apartement</p>
                    </div>
                </div>

                <div class="flex items-start rounded-xl bg-white p-4 shadow-lg col-span-1">
                    <div class="flex h-12 w-12 items-center justify-center rounded-full border border-red-100 bg-red-50">
                        <img src="{{ asset('icons/nature_peopl.svg') }}" alt="" class="h-7 w-7">
                    </div>

                    <div class="ml-4">
                        <h2 class="font-semibold">{{ $partials['countTanah'] }} Properti</h2>
                        <p class="mt-2 text-sm text-gray-500">Properti Tanah</p>
                    </div>
                </div>

                <div class="flex items-start rounded-xl bg-white p-4 shadow-lg col-span-1">
                    <div
                        class="flex h-12 w-12 items-center justify-center rounded-full border border-indigo-100 bg-indigo-50">
                        <img src="{{ asset('icons/night_shelter.svg') }}" alt="" class="h-7 w-7">
                    </div>

                    <div class="ml-4">
                        <h2 class="font-semibold">{{ $partials['countKos'] }} Properti</h2>
                        <p class="mt-2 text-sm text-gray-500">Properti Kos</p>
                    </div>
                </div>

                <div class="flex items-start rounded-xl bg-white p-4 shadow-lg col-span-1">
                    <div
                        class="flex h-12 w-12 items-center justify-center rounded-full border border-indigo-100 bg-indigo-50">
                        <img src="{{ asset('icons/ruko.svg') }}" alt="" class="h-7 w-7">
                    </div>

                    <div class="ml-4">
                        <h2 class="font-semibold">{{ $partials['countRuko'] }} Properti</h2>
                        <p class="mt-2 text-sm text-gray-500">Properti Ruko</p>
                    </div>
                </div>


                <div class="flex items-start rounded-xl bg-white p-4 shadow-lg col-span-1">
                    <div
                        class="flex h-12 w-12 items-center justify-center rounded-full border border-indigo-100 bg-indigo-50">
                        <img src="{{ asset('icons/all_properties.svg') }}" alt="" class="h-7 w-7">
                    </div>

                    <div class="ml-4">
                        <h2 class="font-semibold">{{ $partials['countProperti'] }} Properti</h2>
                        <p class="mt-2 text-sm text-gray-500">Semua Properti</p>
                    </div>
                </div>

            <div class="flex items-start rounded-xl bg-white p-4 shadow-lg col-span-2">
                <div class="flex h-12 w-12 items-center justify-center rounded-full border border-indigo-100 bg-indigo-50">
                    <img src="{{ asset('icons/join_at.svg') }}" alt="" class="h-7 w-7">
                </div>

                <div class="ml-4">
                    <h2 class="font-semibold">{{ $bergabungSejak }}</h2>
                    <p class="mt-2 text-sm text-gray-500">Bergabung sejak</p>
                </div>
            </div>

            <div class="flex items-start rounded-xl bg-white p-4 shadow-lg col-span-1">
                <div class="flex h-12 w-12 items-center justify-center rounded-full border border-indigo-100 bg-indigo-50">
                    <img src="{{ asset('icons/verified_at.svg') }}" alt="" class="h-7 w-7">
                </div>

                <div class="ml-4">
                    <h2 class="font-semibold">{{ $diverifikasiSejak }}</h2>
                    <p class="mt-2 text-sm text-gray-500">Diverifikasi sejak</p>
                </div>
            </div>
        </div>
        <div class="my-5">
            <h2 class="mb-4 text-2xl font-bold">5 Properti terbaru anda</h2>
            <section class="container mx-auto">
                <div class="flex flex-col">
                    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                            <div class="overflow-hidden border border-gray-200  md:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200 ">
                                    <thead class="bg-gray-50 ">
                                        <tr>
                                            <th scope="col"
                                                class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                                <div class="flex items-center gap-x-3">
                                                    <button class="flex items-center gap-x-2">
                                                        <span>No</span>
                                                    </button>
                                                </div>
                                            </th>

                                            <th scope="col"
                                                class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                                Nama Properti
                                            </th>

                                            <th scope="col"
                                                class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                                Alamat
                                            </th>

                                            <th scope="col"
                                                class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                                Harga
                                            </th>

                                            <th scope="col"
                                                class="px-4 py-3.5 hidden md:block text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                                Foto
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200  ">
                                        @forelse ($datas as $data)
                                            <tr>
                                                <td class="px-4 py-4 text-sm font-medium text-gray-700  whitespace-nowrap">
                                                    <div class="inline-flex items-center gap-x-3">
                                                        <span>{{ $loop->iteration }}</span>
                                                    </div>
                                                </td>
                                                <td class="px-4 py-4 text-sm text-gray-500  whitespace-nowrap">
                                                    {{ $data['nama_properti'] }}</td>
                                                <td class="px-4 py-4 text-sm text-gray-500">
                                                    {{ $data['alamat'] }}, {{ $data['latitude'] }}, {{ $data['longitude'] }}
                                                </td>
                                                <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                    <div
                                                        class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60 ">
                                                        <h2 class="text-sm font-normal">{{ $data['harga'] }}</h2>
                                                    </div>
                                                </td>
                                                <td class="px-4 py-4 text-sm text-gray-500 hidden md:block ">
                                                    <ul class="grid grid-cols-4">
                                                        @foreach ($data['photos'] as $photo)
                                                            <li class="flex flex-col">
                                                                <img src="{{ $photo['foto_properti'] }}" alt=""
                                                                    class="rounded-xl w-12 h-12 object-cover">
                                                                <h5 class="font-semibold mt-2">
                                                                    {{ $photo['deskripsi_foto'] }}</h5>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="7" class="px-4 py-4 text-sm text-center text-gray-500">
                                                    Data masih kosong
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
