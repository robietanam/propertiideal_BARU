@extends('includes.app')

@section('title', 'Properti Ideal | Sewa')

@section('content')
    <!-- component -->
    <div class="h-screen overflow-y-scroll bg-white">
        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-4 lg:gap-8">
            <div class="post p-5 lg:p-1 rounded-md lg:col-span-1">
                <div class="lg:fixed lg:top-10 lg:pt-20 lg:left-14 lg:w-3/12 md:fixed md:w-5/12">
                    <div class="bg-white relative rounded-xl shadow-lg mb-6 px-4 py-4 mb-2">
                        <div class="flex flex-row justify-between items-center mb-2">
                            <a href="" class="inline-block text-gray-600 hover:text-black w-full"><span class="material-icons-outlined font-semibold text-2xl float-left">Kategori</span></a>
                            <div class="inline-flex space-x-2 items-center">
                                <a href="#" class="p-2 border border-slate-200 rounded-md inline-flex space-x-1 items-center hover:bg-slate-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                    </svg>
                                    <span class="text-sm hidden md:block">Latest</span>
                                </a>
                            </div>
                        </div>
                        <div class="h-px bg-black"></div>
                        <div id="tasks" class="my-5 ml-2">
                            <div id="task" class="flex justify-between items-center border-b border-slate-200 py-3 px-2 border-l-4 border-l-transparent">
                                <div class="inline-flex items-center space-x-2">
                                    <div class="text-slate-500 line-through">YT Intro remix</div>
                                </div>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-slate-500 hover:text-slate-700 hover:cursor-pointer">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>
                                </div>
                            </div>
                            <div id="task" class="flex justify-between items-center border-b border-slate-200 py-3 px-2 border-l-4 border-l-transparent">
                                <div class="inline-flex items-center space-x-2">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-slate-500">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                        </svg>
                                    </div>
                                    <div class="text-slate-500 line-through">Do the homework</div>
                                </div>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-slate-500 hover:text-slate-700 hover:cursor-pointer">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white relative rounded-xl shadow-lg mb-6 px-4 py-4 mb-2">
                        <a href="" class="inline-block text-gray-600 hover:text-black w-full"><span class="material-icons-outlined font-semibold float-left">Kisaran harga</span></a>
                        <div class="h-px bg-black"></div>
                        <form action="">
                            <div class="flex flex-row my-2">
                                <span class="z-highest rounded-l-lg w-10 h-10 flex justify-center items-center text-md text-gray-400 border border-r-0" mode="render" block="">
                                    Rp
                                </span>
                                <input value="" class="border border-gray-200 rounded-r-lg outline-none focus:ring-1 ring-blue-400 w-full pl-2" id="" name="" required="false" placeholder="50000">
                            </div>
                            <div class="flex flex-row my-2">
                                <span class="z-highest rounded-l-lg w-10 h-10 flex justify-center items-center text-md text-gray-400 border border-r-0" mode="render" block="">
                                    Rp
                                </span>
                                <input value="" class="border border-gray-200 rounded-r-lg outline-none focus:ring-1 ring-blue-400 w-full pl-2" id="" name="" required="false" placeholder="50000">
                            </div>

                            <a href="#" class="w-full block text-black justify-center flex font-medium text-lg py-2 mt-2 rounded-xl border border-1 border-white transition duration-200 ease-in-out hover:border hover:border-1 hover:border-solid hover:border-black hover:text-black">
                                <button type="button">
                                    Batalkan filter
                                </button>
                            </a>
                            <a href="#" class="w-full block bg-primarybase text-white justify-center flex font-medium text-lg py-2 mt-2 rounded-xl hover:shadow-lg">
                                <button type="button">
                                    Terapkan filter
                                </button>
                            </a>
                        </form>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-2 md:col-span-1 mt-5 md:mt-0">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @for ($i = 0; $i <= 10; $i++)
                    <a href="" class="p-4 lg:p-2 rounded-md shadow-lg bg-white hover:shadow-xl transform hover:-translate-y-2 transition duration-300">
                        <img src="https://images.unsplash.com/photo-1506748686214-e9df14d4d9d0" alt="Product Image" class="w-full h-48 object-cover rounded-md">
                        <div class="px-6 py-4">
                            <div class="mb-2">
                                <h2 class="text-xl font-bold text-gray-900">Beautiful House</h2>
                                <div class="flex items-center space-x-2">
                                    <div class="rounded-full bg-blue-600 py-1 px-2 text-xs font-medium text-white">p</div>
                                    <div class="rounded-full bg-yellow-500 py-1 px-2 text-xs font-medium text-white">p</div>
                                </div>
                            </div>
                            <div class="flex justify-between">
                                <div class="flex items-center space-x-2">
                                    <img src="https://img.icons8.com/windows/24/null/bedroom.png" />
                                    <p class="text-sm font-medium text-gray-700">3 Bedrooms</p>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <img src="https://img.icons8.com/pastel-glyph/24/null/bath--v2.png" />
                                    <p class="text-sm font-medium text-gray-700">2 Bathrooms</p>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <img src="https://img.icons8.com/ios-glyphs/24/null/expand--v1.png" />
                                    <p class="text-sm font-medium text-gray-700">120 sqm</p>
                                </div>
                            </div>
                            <div class="mt-4">
                                <p class="text-3xl font-extrabold text-blue-800">$200,000</p>
                            </div>
                        </div>
                        
                        <div class="mt-4">
                            <h3 class="text-gray-700 font-bold text-lg">Product {{ $i+1 }}</h3>
                            <p class="text-gray-600 mt-2">Description of product {{ $i+1 }} goes here. It should be brief and informative.</p>
                            <span class="text-primarybase font-bold mt-4 block">Rp {{ number_format(rand(10000, 100000), 0, ',', '.') }}</span>
                        </div>
                    </a>

                    @endfor
                </div>
            </div>
            
        </div>
    </div>
@endsection
