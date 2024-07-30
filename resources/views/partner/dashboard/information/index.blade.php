@extends('partner.layouts.app')

@section('title', 'Dashboard | Partner')

@section('content')
    <div class="container mx-auto my-5 p-5">
        <div class="md:flex no-wrap md:-mx-2 ">

            <div class="w-full md:w-3/12 md:mx-2">
                <div class="bg-white p-3 border-t-4 border-green-400">
                    <div class="image overflow-hidden">
                        @if ($datas['foto_profile'] == 'user.png')
                            <img src="{{ asset('img/person_1.jpg') }}" alt="1Profile Picture">
                        @else
                            <img src="{{ asset('upload/profile/' . $datas['foto_profile']) }}" alt="Profile Picture">
                        @endif
                    </div>
                    <h1 class="text-gray-900 font-bold text-xl leading-8 my-1">{{ $datas['name'] }}</h1>
                    <h3 class="text-gray-600 font-lg text-semibold leading-6">{{ $datas['nama'] }}</h3>
                    <ul
                        class="bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">
                        <li class="flex items-center py-3">
                            <span>Status</span>
                            <span class="ml-auto"><span
                                    class="bg-green-500 py-1 px-2 rounded text-white text-sm">{{ $datas['status'] }}</span></span>
                        </li>
                        <li class="flex items-center py-3">
                            <span>Bergabung sejak</span>
                            <span class="ml-auto">{{ $datas['bergabung_sejak'] }}</span>
                        </li>
                    </ul>
                </div>
                <div class="my-4"></div>
            </div>

            <div class="w-full md:w-9/12 mx-2 h-64">
                <div class="flex flex-col h-[100vh]">
                    <div
                        class="relative flex flex-col items-start rounded-[20px]bg-white bg-clip-border shadow-3xl shadow-shadow-500  p-3">
                        <div class="mt-2 mb-8 w-full">
                            <div>
                                <h4 class="px-2 text-xl font-bold text-navy-700">
                                    Detail informasi
                                </h4>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4 px-2 w-full">
                            <div
                                class="flex flex-col items-start justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500  ">
                                <p class="text-sm text-gray-600">Email</p>
                                <p class="text-base font-medium text-navy-700">
                                    {{ $datas['email'] }}
                                </p>
                            </div>

                            <div
                                class="flex flex-col justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500  ">
                                <p class="text-sm text-gray-600">Nomor Telepon</p>
                                <p class="text-base font-medium text-navy-700">
                                    {{ $datas['no_telepon'] }}
                                </p>
                            </div>

                            <div
                                class="flex flex-col items-start justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500  ">
                                <p class="text-sm text-gray-600">Detail Alamat</p>
                                <p class="text-base font-medium text-navy-700">
                                    {{ $datas['detail_alamat'] }}
                                </p>
                            </div>

                            <div
                                class="flex flex-col justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500  ">
                                <p class="text-sm text-gray-600">Instagram</p>
                                <p class="text-base font-medium text-navy-700">
                                    {{ $datas['link_instagram'] }}
                                </p>
                            </div>

                            <div
                                class="flex flex-col items-start justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500  ">
                                <p class="text-sm text-gray-600">Website</p>
                                <p class="text-base font-medium text-navy-700">
                                    {{ $datas['link_website'] }}
                                </p>
                            </div>

                            <div
                                class="flex flex-col justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500  ">
                                <p class="text-sm text-gray-600">Sebagai</p>
                                <p class="text-base font-medium text-navy-700">
                                    Partner
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('js')
    @endpush
@endsection
