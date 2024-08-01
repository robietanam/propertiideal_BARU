@extends('includes.app')

@section('title', 'Properti Ideal | Masuk')

@section('content')
    <div class="flex h-screen">
        <!-- Left Pane -->
        <div class="hidden lg:flex justify-center flex-1 bg-white text-black">
            <div class="max-w-lg text-center">
                <img class="object-cover object-center w-full h-full" src="{{ asset('img/5041145.jpg') }}"
                    alt="Authentication image" />
            </div>
        </div>
        <!-- Right Pane -->
        <div class="w-full  lg:w-1/2 flex justify-center">
            <div class="max-w-md w-full">
                <div class="flex mt-20 items-center justify-center gap-y-10 sm:py-16 lg:py-20 my-10">
                    <a href="{{ route('login') }}" class="flex items-center gap-x-4">
                        <img class="h-12 w-12 my-3 mr-4" src="{{ asset('img/icons/properti-ideal-icon.png') }}"
                            alt="">
                        <div class="flex flex-col">
                            <div class="text-xl font-bold text-primarybase ">Properti Ideal</div>
                            <div class="text-md font-semibold text-primarybase ">Jual properti Anda bersama kami</div>
                        </div>
                    </a>
                </div>
                <div class="mb-6">
                    <h1 class="text-3xl text-gray-800  font-bold">{{ __('Selamat datang!') }}</h1>
                    <p class="text-md font-medium text-gray-400 ">Yuk, masuk sebagai pembeli untuk mulai membeli properti
                        Anda</p>
                </div>
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
                <form action="{{ route('pages.customer.login.store') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label for="email" class="block text-gray-800 text-md font-semibold mb-2">Email
                            *</label>
                        <input type="text" id="email" name="email"
                            class="mt-1 p-2 w-full border rounded-md focus:border-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 transition-colors duration-300">
                    </div>
                    <div>
                        <label for="password" class="block text-gray-800 text-md font-semibold mb-2">Password
                            *</label>
                        <input type="password" id="password" name="password"
                            class="mt-1 p-2 w-full border rounded-md focus:border-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 transition-colors duration-300">
                    </div>
                    <div>
                        <button type="submit"
                            class="w-full bg-blue-600 text-white p-2 rounded-md hover:bg-gray-800 focus:outline-none focus:bg-black focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900 transition-colors duration-300">Sign
                            Up</button>
                    </div>
                </form>
                <div class="mt-4 text-sm text-gray-600 text-center">
                    <p>Belum punya akun? <a href="{{ route('pages.customer.register') }}"
                            class="text-blue-600 hover:underline">Daftar sekarang!</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    @push('js')
    @endpush
@endsection
