@extends('partner.layouts.app')

@section('title', 'Dashboard | Partner')

@section('content')
<section class="flex justify-between mb-5">
    @if (session('error'))
        <p>{{ session('error') }}</p>
    @endif
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <div>
        <h1 class="text-2xl font-bold">Properti Ruko</h1>
        <p class="text-lg text-slate-500">Manajemen dan kelola produk properti ruko Anda sekarang juga!</p>
    </div>
    <div>
        <a href="{{ route('pages.dashboard.properti.ruko.create') }}">
            <button class="px-4 py-2 bg-primarybase rounded-lg">
                <span class="text-white font-semibold">Tambah properti</span>
            </button>
        </a>
    </div>
</section>
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
                                    Deskripsi
                                </th>

                                <th scope="col"
                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                    Harga
                                </th>

                                <th scope="col"
                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                    Foto
                                </th>

                                <th scope="col"
                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                    Aksi
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
                                        {{ $data['alamat'] }}, {{ $data['latitude'] }}, {{ $data['longitude'] }}</td>
                                    <td class="px-4 py-4 text-sm text-gray-500  whitespace-nowrap">
                                        {{ $data['deskripsi'] }}</td>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <div
                                            class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60 ">
                                            <h2 class="text-sm font-normal">{{ $data['harga'] }}</h2>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500 ">
                                        <ul class="grid grid-cols-4">
                                            @foreach ($data['photos'] as $photo)
                                                <li class="flex flex-col">
                                                    <img src="{{ $photo['foto_properti'] }}" alt=""
                                                        class="rounded-xl w-12 h-12 object-cover">
                                                    <h5 class="font-semibold mt-2">{{ $photo['deskripsi_foto'] }}</h5>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                        <div class="flex items-center gap-x-6">
                                            <a
                                                href="{{ route('pages.dashboard.properti.ruko.update', $data['slug']) }}">
                                                <button
                                                    class="text-gray-500 transition-colors duration-200   hover:text-indigo-500 focus:outline-none">
                                                    Edit
                                                </button>
                                            </a>

                                            <form
                                                action="{{ route('pages.dashboard.properti.ruko.destroy', $data['slug']) }}"
                                                method="POST"
                                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="text-blue-500 transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                                                    Hapus
                                                </button>
                                            </form>
                                        </div>
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

    <div class="flex items-center justify-between mt-6">
        <a href="#"
            class="flex items-center px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md gap-x-2 hover:bg-gray-100    ">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
            </svg>

            <span>
                previous
            </span>
        </a>

        <div class="items-center hidden md:flex gap-x-3">
            <a href="#" class="px-2 py-1 text-sm text-blue-500 rounded-md  bg-blue-100/60">1</a>
            <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md   hover:bg-gray-100">2</a>
            <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md   hover:bg-gray-100">3</a>
            <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md   hover:bg-gray-100">...</a>
            <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md   hover:bg-gray-100">12</a>
            <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md   hover:bg-gray-100">13</a>
            <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md   hover:bg-gray-100">14</a>
        </div>

        <a href="#"
            class="flex items-center px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md gap-x-2 hover:bg-gray-100    ">
            <span>
                Next
            </span>

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
            </svg>
        </a>
    </div>
</section>
@push('js')
@endpush
@endsection
