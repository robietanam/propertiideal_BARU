@extends('includes.app')

@section('title', 'Properti Ideal | Profile')

@section('content')
    @if (session('success'))
        <div id="successMessage"
            class="fixed top-0 left-0 w-full h-full flex justify-center items-center backdrop-blur-md bg-white/30 bg-opacity-50 z-50">
            <div class="relative w-full max-w-screen-md rounded-lg bg-green-500 px-4 py-4 text-base text-white"
                data-dismissible="alert">
                <div class="absolute top-4 left-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                        class="mt-px h-6 w-6">
                        <path fill-rule="evenodd"
                            d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div class="ml-8 mr-12">
                    <h5 class="block font-sans text-xl font-semibold leading-snug tracking-normal text-white antialiased">
                        Berhasil
                    </h5>
                    <p class="mt-2 block font-sans text-base font-normal leading-relaxed text-white antialiased">
                        {{ session('success') }}
                    </p>
                </div>
                <div data-dismissible-target="alert" data-ripple-dark="true"
                    class="absolute top-3 right-3 w-max rounded-lg transition-all hover:bg-white hover:bg-opacity-20">
                    <div role="button" class="w-max rounded-lg p-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if (session('error'))
        <div id="successMessage"
            class="fixed top-0 left-0 w-full h-full flex justify-center items-center backdrop-blur-md bg-white/30 bg-opacity-50 z-50">
            <div class="relative w-full max-w-screen-md rounded-lg bg-red-500 px-4 py-4 text-base text-white"
                data-dismissible="alert">
                <div class="absolute top-4 left-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                        class="mt-px h-6 w-6">
                        <path fill-rule="evenodd"
                            d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div class="ml-8 mr-12">
                    <h5 class="block font-sans text-xl font-semibold leading-snug tracking-normal text-white antialiased">
                        Gagal
                    </h5>
                    <p class="mt-2 block font-sans text-base font-normal leading-relaxed text-white antialiased">
                        {{ session('error') }}
                    </p>
                </div>
                <div data-dismissible-target="alert" data-ripple-dark="true"
                    class="absolute top-3 right-3 w-max rounded-lg transition-all hover:bg-white hover:bg-opacity-20">
                    <div role="button" class="w-max rounded-lg p-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <section class="flex flex-col justify-center mx-auto max-w-7xl">
        <div class="bg-white antialiased my-4 justify-center flex">
            <div class="flex px-6 md:px-0 w-full flex-col mb-5">
                <div class="mt-2 mb-6 w-full">
                    <h4 class=" text-2xl text-center md:text-start font-bold text-textbase">
                        Pengaturan akun
                    </h4>
                </div>
                <div>
                    <form action="{{ route('customer.update.foto') }}" class="flex flex-wrap  mb-4" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-2 flex flex-wrap w-full justify-center md:justify-start">
                            <div class="mr-4">
                                <label for="foto_profile" class="block text-center md:text-start text-lg font-semibold text-textbase mb-2">Foto
                                    profil</label>
                                @if ($user->foto_profile == 'user.png')
                                    <img class="w-52 h-52 rounded" src="{{ asset('img/person_1.jpg') }}"
                                        alt="Default avatar">
                                @else
                                    <img class="w-52 h-52 rounded" src="/uploads/{{ $user->foto_profile }}"
                                        alt="User avatar">
                                @endif
                            </div>
                            <div class="mb-4">
                                <div class="cursor-pointer">
                                    <label for="foto_profile"
                                        class="invisible block text-lg font-semibold text-textbase mb-2">Foto profil</label>
                                    <input type="file" name="foto_profile" id="foto_profile" class="sr-only" />
                                    <label for="foto_profile"
                                        class="relative flex cursor-pointer  items-center justify-center rounded-md border border-dashed border-[#e0e0e0] p-12 text-center">
                                        <div>
                                            <span class="mb-2 block text-xl font-semibold text-textbase">
                                                Ubah foto disini
                                            </span>
                                            <span class="mb-2 block text-base font-medium text-[#6B7280]">
                                                atau
                                            </span>
                                            <span class="inline-flex rounded py-2 px-7 text-base font-medium text-textbase">
                                                Cari
                                            </span>
                                        </div>
                                    </label>
                                    @error('foto_profile')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="w-full rounded-lg bg-primarybase py-3 text-white">Ubah</button>
                    </form>
                    <div id="image-preview" class="mt-4 w-[36%]"></div>
                    <div>
                        <div class="mb-4">
                            <label for="name" class="block text-lg font-semibold text-textbase mb-2">Username</label>
                            <div class="flex flex-row">
                                <input readonly disabled type="name" id="name"
                                    class="shadow-sm w-full rounded-md px-3 py-2 border border-gray-300 focus:outline-none focus:ring-primarybase focus:border-primarybase"
                                    value="{{ $user->name }}" required>
                                <button disabled class="w-1/4 rounded-lg bg-gray-300 px-5 ml-4 text-white">Tidak bisa
                                    diubah</button>
                            </div>
                        </div>
                        <div class="mb-4">
                            <form action="{{ route('customer.update.email') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <label for="email" class="block text-lg font-semibold text-textbase mb-2">Email</label>
                                <div class="flex flex-row">
                                    <input type="email" id="email" name="email"
                                        class="shadow-sm w-full rounded-md px-3 py-2 border border-gray-300 focus:outline-none focus:ring-primarybase focus:border-primarybase"
                                        value="{{ $user->email }}" required>
                                    <button type="submit"
                                        class="w-1/4 rounded-lg bg-primarybase px-5 ml-4 text-white">Ubah</button>
                                </div>
                                @error('email')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </form>
                        </div>
                        <div class="mb-4">
                            <form action="{{ route('customer.update.nama') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <label for="nama" class="block text-lg font-semibold text-textbase mb-2">Nama</label>
                                <div class="flex flex-row">
                                    <input type="nama" id="nama" name="nama"
                                        class="shadow-sm w-full rounded-md px-3 py-2 border border-gray-300 focus:outline-none focus:ring-primarybase focus:border-primarybase"
                                        value="{{ $user->nama }}" required>
                                    <button type="submit"
                                        class="w-1/4 rounded-lg bg-primarybase px-5 ml-4 text-white">Ubah</button>
                                </div>
                                @error('nama')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </form>
                        </div>
                        <div class="mb-4">
                            <form action="{{ route('customer.update.password') }}" method="POST">
                                @csrf
                                @method('PUT')
                                <label for="password" class="block text-lg font-semibold text-textbase mb-2">Ubah
                                    password</label>
                                <div class="flex flex-row">
                                    <input type="password" id="password" name="password"
                                        class="shadow-sm w-full rounded-md px-3 py-2 border border-gray-300 focus:outline-none focus:ring-primarybase focus:border-primarybase"
                                        value="{{ $user->password }}" required>
                                    <button type="submit"
                                        class="w-1/4 rounded-lg bg-primarybase px-5 ml-4 text-white">Ubah</button>
                                </div>
                                @error('password')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#foto_profile').change(function(e) {
                var fileName = e.target.files[0].name;
                var fileExt = fileName.split('.').pop();
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#image-preview').html(`
                    <div class="mb-5 rounded-md border border-[#e0e0e0] py-4 px-8">
                        <div class="flex items-center justify-between">
                            <span class="truncate pr-3 text-base font-medium text-textbase">
                            ${fileName}
                            </span>
                        </div>
                    </div>
                    `);
                };
                reader.readAsDataURL(this.files[0]);
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            var successMessage = document.getElementById('successMessage');

            successMessage.addEventListener('click', function() {
                successMessage.style.display = 'none';
            });
        });
    </script>
    @push('js')
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    @endpush
@endsection
