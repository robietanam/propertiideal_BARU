@extends('includes.app')

@section('title', 'Properti Ideal | Beli')

@section('content')
    <div class="bg-white max-w-full lg:px-20">
        <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 md:grid-cols-2 lg:gap-8">
            <div class="post p-5 lg:p-1 rounded-md">

                <div class="lg:top-10 lg:left-14 lg:w-3/5 md:w-3/5">
                    <div class="bg-white relative rounded-xl shadow-lg mb-6 px-4 py-4 mb-2">
                        <div class="flex flex-row justify-between items-center mb-2">
                            <a href="" class="inline-block text-gray-600 hover:text-black w-full"><span
                                    class="material-icons-outlined font-semibold text-2xl float-left">Kategori</span></a>
                        </div>

                        <div class="h-px bg-black"></div>
                        <div id="tasks" class="my-5 ml-2">
                            <form id="filterForm" action="{{ route('pages.buy') }}" method="GET">
                                @foreach ($categories as $category)
                                    <div id="task"
                                        class="flex justify-between items-center border-b border-slate-200 py-3 px-2 border-l-4 border-l-transparent">
                                        <div class="inline-flex items-center space-x-2">
                                            <div class="text-slate-500">{{ $category->nama_kategori }}</div>
                                        </div>
                                        <div>
                                            <input type="radio" name="category" value="{{ $category->slug }}"
                                                onchange="document.getElementById('filterForm').submit();"
                                                {{ request()->category == $category->slug ? 'checked' : '' }}>
                                        </div>
                                    </div>
                                @endforeach

                                <div class="flex flex-row my-2 pt-5">
                                    <span
                                        class="z-highest rounded-l-lg w-10 h-10 flex justify-center items-center text-md text-gray-400 border border-r-0">
                                        Rp
                                    </span>
                                    <input value="{{ request()->minimal }}"
                                        class="border border-gray-200 rounded-r-lg outline-none focus:ring-1 ring-blue-400 w-full pl-2"
                                        name="minimal" placeholder="Min Price">
                                </div>
                                <div class="flex flex-row my-2">
                                    <span
                                        class="z-highest rounded-l-lg w-10 h-10 flex justify-center items-center text-md text-gray-400 border border-r-0">
                                        Rp
                                    </span>
                                    <input value="{{ request()->maksimal }}"
                                        class="border border-gray-200 rounded-r-lg outline-none focus:ring-1 ring-blue-400 w-full pl-2"
                                        name="maksimal" placeholder="Max Price">
                                </div>

                                <button type="submit"
                                    class="w-full block mt-5 bg-primarybase text-white justify-center flex font-medium text-lg py-2 mt-2 rounded-xl hover:shadow-lg transition duration-200 ease-in-out hover:bg-yellow-600 hover:text-white">
                                    Terapkan filter
                                </button>
                            </form>
                            <a href="{{ route('pages.buy') }}"
                                class="w-full bg-white ring-1 ring-primarybase mt-3 text-primarybase font-medium text-lg py-2 rounded-xl flex justify-center items-center hover:shadow-lg transition duration-200 ease-in-out hover:bg-primarybase  hover:ring-1 hover:ring-primarybase hover:text-white">
                                Bersihkan filter
                            </a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-2 p-4 bg-white mt-3" id="posted">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                    @foreach ($properties as $property)
                        <a href="{{ route('pages.buy') }}">
                            <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                                <div class="flex items-end justify-end h-52 w-full bg-cover relative"
                                    style="background-image: url('/uploads/{{ $property->image }}')">
                                </div>
                                <div class="px-5 py-3">
                                    <h3 class="text-gray-700 text-lg font-semibold">{{ $property->nama_properti }}</h3>
                                    <div>
                                        <h2 class="text-primarybase text-lg font-semibold">Rp
                                            {{ number_format($property->price, 0, ',', '.') }}</h2>
                                        <div class="flex gap-2">
                                        </div>
                                        <p class="text-gray-700 text-md font-medium mt-4">{{ $property->harga }}</p>
                                        <p class="text-gray-700 text-sm font-medium mb-4">{{ $property->alamat }} Terjual
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
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
