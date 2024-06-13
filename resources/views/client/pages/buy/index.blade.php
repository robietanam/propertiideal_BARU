@extends('includes.app')

@section('title', 'eFarm | Terdekat')

@section('content')
    <!-- component -->
    <div class="h-screen overflow-y-scroll bg-white">
        <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 md:grid-cols-2 lg:gap-8">
            <div class="post p-5 lg:p-1 rounded-md">
                <div class="lg:fixed lg:top-10 lg:pt-20 lg:left-14 lg:w-3/12 md:fixed md:w-5/12">
                    <div class="bg-white relative rounded-xl shadow-lg mb-6 px-4 py-4 mb-2">
                        <div class="flex flex-row justify-between items-center mb-2">
                            <a href="" class="inline-block text-gray-600 hover:text-black w-full"><span
                                    class="material-icons-outlined font-semibold text-2xl float-left">Kategori</span></a>
                            <div class="inline-flex space-x-2 items-center">
                                <a href="#"
                                    class="p-2 border border-slate-200 rounded-md inline-flex space-x-1 items-center hover:bg-slate-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                    </svg>
                                    <span class="text-sm hidden md:block">Latest</span>
                                </a>
                            </div>
                        </div>
                        <div class="h-px bg-black"></div>
                        <div id="tasks" class="my-5 ml-2">
                            <div id="task"
                                class="flex justify-between items-center border-b border-slate-200 py-3 px-2 border-l-4  border-l-transparent">
                                <div class="inline-flex items-center space-x-2">
                                    <div class="text-slate-500 line-through">YT Intro remix</div>
                                </div>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-4 h-4 text-slate-500 hover:text-slate-700 hover:cursor-pointer">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>
                                </div>
                            </div>
                            <div id="task"
                                class="flex justify-between items-center border-b border-slate-200 py-3 px-2 border-l-4  border-l-transparent">
                                <div class="inline-flex items-center space-x-2">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-slate-500">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M4.5 12.75l6 6 9-13.5" />
                                        </svg>
                                    </div>
                                    <div class="text-slate-500 line-through">Do the homework</div>
                                </div>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-4 h-4 text-slate-500 hover:text-slate-700 hover:cursor-pointer">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="bg-white relative rounded-xl shadow-lg mb-6 px-4 py-4 mb-2">
                        <a href="" class="inline-block text-gray-600 hover:text-black w-full"><span
                                class="material-icons-outlined font-semibold  float-left">Kisaran harga</span></a>
                        <div class="h-px bg-black"></div>
                        <form action="">
                            <div class="flex flex-row my-2">
                                <span
                                    class="z-highest rounded-l-lg w-10 h-10 flex justify-center items-center text-md text-gray-400 border border-r-0"
                                    mode="render" block="">
                                    Rp
                                </span>
                                <input value=""
                                    class="border border-gray-200 rounded-r-lg outline-none focus:ring-1 ring-blue-400 w-full pl-2"
                                    id="" name="" required="false" placeholder="50000">
                            </div>
                            <div class=" flex flex-row my-2">
                                <span
                                    class="z-highest rounded-l-lg w-10 h-10 flex justify-center items-center text-md text-gray-400 border border-r-0"
                                    mode="render" block="">
                                    Rp
                                </span>
                                <input value=""
                                    class="border border-gray-200 rounded-r-lg outline-none focus:ring-1 ring-blue-400 w-full pl-2"
                                    id="" name="" required="false" placeholder="50000">
                            </div>

                            <a href="#"
                                class="w-full block text-black justify-center flex font-medium text-lg py-2 mt-2 rounded-xl border border-1 border-white transition duration-200 ease-in-out hover:border hover:border-1 hover:border-solid hover:border-black hover:text-black">
                                <button type="button">
                                    Batalkan filter
                                </button>
                            </a>
                            <a href="#"
                                class="w-full block bg-primarybase text-white justify-center flex font-medium text-lg py-2 mt-2 rounded-xl hover:shadow-lg transition duration-200 ease-in-out hover:bg-yellow-600 hover:text-white">
                                <button type="button">
                                    Terapkan filter
                                </button>
                            </a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-2 p-4 bg-white mt-3" id="posted">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                    @for ($i = 0; $i <= 10; $i++)
                                    <a href="">
                                        <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                                            <div class="flex items-end justify-end h-52 w-full bg-cover relative"
                                                style="background-image: url('/uploads/')">
                                            </div>

                                            <div class="px-5 py-3">
                                                <h3 class="text-gray-700 text-lg font-semibold">icha tai
                                                </h3>
                                                <div>
                                                    <h2 class="text-primarybase text-lg font-semibold">Rp
                                                        asdad
                                                        <div class="flex gap-2">
                                                            <div class="px-2 py-1 rounded-md bg-primarybase">
                                                                <p class="text-white text-sm">
                                                                    tai
                                                                </p>
                                                            </div>
                                                            <div class="px-2 py-1 rounded-md bg-primarybase">
                                                                <p class="text-white text-sm">p
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <p class="text-gray-700 text-md font-medium mt-4">ngawi
                                                        </p>

                                                        <p class="text-gray-700 text-sm font-medium mb-4">
                                                            3 Terjual</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                @endfor
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
